let chartJsPromise = null;

function ensureChartJs() {
    if (typeof Chart !== "undefined") {
        return Promise.resolve();
    }

    if (!chartJsPromise) {
        chartJsPromise = new Promise((resolve, reject) => {
            const script = document.createElement("script");
            script.src = "https://cdn.jsdelivr.net/npm/chart.js@4/dist/chart.umd.min.js";
            script.onload = resolve;
            script.onerror = () => reject(new Error("Failed to load Chart.js"));
            document.head.appendChild(script);
        });
    }

    return chartJsPromise;
}

function themeColor(el, name, fallback) {
    return getComputedStyle(el).getPropertyValue(name).trim() || fallback;
}

function themeColors(el) {
    return [
        themeColor(el, "--color-chart-1", "oklch(0.646 0.222 41.116)"),
        themeColor(el, "--color-chart-2", "oklch(0.6 0.118 184.704)"),
        themeColor(el, "--color-chart-3", "oklch(0.398 0.07 227.392)"),
        themeColor(el, "--color-chart-4", "oklch(0.828 0.189 84.429)"),
        themeColor(el, "--color-chart-5", "oklch(0.769 0.188 70.08)"),
    ];
}

function applyDefaults(type, data, el) {
    const colors = themeColors(el);

    const base = {
        bar: (i) => ({
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: colors[i % colors.length],
            barPercentage: 0.7,
            categoryPercentage: 0.7,
        }),
        line: (i) => ({
            borderColor: colors[i % colors.length],
            backgroundColor: colors[i % colors.length] + "1a",
            borderWidth: 2,
            pointRadius: 0,
            pointHitRadius: 8,
            tension: 0.3,
            fill: true,
        }),
    };

    const factory = base[type];
    if (!factory) return data;

    return {
        ...data,
        datasets: (data.datasets || []).map((ds, i) => ({
            ...factory(i),
            ...ds,
        })),
    };
}

export default function (Alpine) {
    Alpine.directive("chart", (el, { expression }, { evaluate, cleanup }) => {
        let config = expression ? evaluate(expression) : {};
        let canvas = el.querySelector("canvas") || el.querySelector("[x-ref='canvas']");
        if (!canvas) return;

        let chart = null;
        let type = config.type || "bar";

        ensureChartJs()
            .then(() => {
                const mutedFg = themeColor(el, "--color-muted-foreground", "oklch(0.556 0 0)");
                const border = themeColor(el, "--color-border", "oklch(0.922 0 0)");
                const fg = themeColor(el, "--color-foreground", "oklch(0.145 0 0)");
                const bg = themeColor(el, "--color-background", "oklch(1 0 0)");

                chart = new Chart(canvas, {
                    type: type,
                    data: applyDefaults(type, config.data || {}, el),
                    options: {
                        responsive: true,
                        maintainAspectRatio: true,
                        aspectRatio: 2.5,
                        plugins: {
                            legend: { display: false },
                            tooltip: {
                                backgroundColor: fg,
                                titleColor: bg,
                                bodyColor: bg,
                                titleFont: { size: 13 },
                                bodyFont: { size: 12 },
                                padding: 10,
                                cornerRadius: 6,
                                displayColors: false,
                            },
                        },
                        scales: {
                            x: {
                                border: { display: false },
                                grid: { display: false },
                                ticks: {
                                    color: mutedFg,
                                    font: { size: 12 },
                                },
                            },
                            y: {
                                border: { display: false },
                                grid: { color: border },
                                ticks: { display: false },
                                beginAtZero: true,
                            },
                        },
                        ...config.options,
                    },
                });
            })
            .catch((err) => console.warn("x-chart:", err.message));

        cleanup(() => {
            if (chart) {
                chart.destroy();
                chart = null;
            }
        });
    });
}
