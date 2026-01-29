export default function (Alpine) {
    Alpine.directive("chart", (el, { expression }, { evaluate, cleanup }) => {
        let config = expression ? evaluate(expression) : {};
        let canvas = el.querySelector("canvas") || el.querySelector("[x-ref='canvas']");
        if (!canvas) return;

        let chart = null;

        // Wait for Chart.js to be available
        const init = () => {
            if (typeof Chart === "undefined") {
                console.warn("Chart.js is not loaded. Please include Chart.js before using x-chart.");
                return;
            }

            chart = new Chart(canvas, {
                type: config.type || "bar",
                data: config.data || {},
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    ...config.options,
                },
            });
        };

        // Initialize on next tick to ensure DOM is ready
        queueMicrotask(init);

        cleanup(() => {
            if (chart) {
                chart.destroy();
                chart = null;
            }
        });
    });
}
