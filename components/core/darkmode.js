export default function (Alpine) {
    Alpine.directive("darkmode", (el, directive) => {
        console.log('Dark Mode Directive Loaded');
        if (!directive.value) handleRoot(el, Alpine);
    }).before("bind");
}

function handleRoot(el, Alpine) {
    Alpine.bind(el, () => {
        return {
            "x-data"() {
                return {
                    darkMode: false,
                    init() {
                        if (!this.hasCookie('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                            this.darkMode = true
                        }
                        this.darkMode = this.hasCookie('darkMode');

                        this.$watch('darkMode', value => {
                            if (value) {
                                this.setCookie('darkMode')
                            } else {
                                this.removeCookie('darkMode')
                            }
                        })
                    },
                    setCookie(name) {
                        document.cookie = `${name}=true;path=/;max-age=31536000`
                    },
                    hasCookie(name) {
                        return document.cookie.includes(name)
                    },
                    removeCookie(name) {
                        document.cookie = `${name}=;path=/;max-age=0`
                    },
                };
            },
            ":class"() {
                return {
                    'dark': this.darkMode
                }
            },
        };
    });
}