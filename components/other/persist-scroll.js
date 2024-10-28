/**
 * Created by laravel luvi
 * https://laravel-luvi.com/docs/components/form
 */

export default function (Alpine) {
    Alpine.directive("persist-scroll", (el, directive) => {
        // console.log(directive);
        handleRoot(el, Alpine, directive.expression);
    }).before("bind");
}

function handleRoot(el, Alpine, name) {
    Alpine.bind(el, () => {
        return {
            "x-data"() {
                return {
                    init() {
                        // Get from local storage
                        let scrollPosition = localStorage.getItem(name) || 0;

                        // Set the scroll position
                        this.$el.scrollTo(0, scrollPosition);

                        // track scrollPosition
                        this.$el.addEventListener('scroll', (ev) => {
                            localStorage.setItem(name, ev.target.scrollTop);
                        });
                    }
                };
            },
        };
    });
}