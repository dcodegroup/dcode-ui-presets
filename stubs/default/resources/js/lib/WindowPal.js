export default class {
    constructor($window) {
        this.$ = $window;
        this.resizeCallbacks = [];
        this.scrollCallbacks = [];
        this.$clickoffElements = [];
        this.clickoffCallback = null;
        this.resizeTimeout = null;
        $window.addEventListener('resize', () => {
            if (this.resizeTimeout !== null) {
                clearTimeout(this.resizeTimeout);
            }
            this.resizeTimeout = setTimeout(() => {
                this.resizeCallbacks.forEach((callback) => {
                    callback();
                });
                clearTimeout(this.resizeTimeout);
                this.resizeTimeout = null;
            }, 200);
        });
        $window.addEventListener('scroll',() => {
            this.scrollCallbacks.forEach((callback) => {
                callback();
            });
        });
        document.querySelector('body').addEventListener("click", e => {
            if (this.clickoffCallback) {
                let clickingOn = false;
                this.$clickoffElements.forEach(($clickoffElement) => {
                    let $clickedElement = e.target;
                    if ($clickoffElement === $clickedElement || $clickoffElement.contains($clickedElement)) {
                        clickingOn = true;
                    }
                });
                if (!clickingOn) {
                    this.clickoffCallback();
                    this.resetClickoff();
                }
            }
        });
    }
    resize(callback) {
        this.resizeCallbacks.push(callback);
    }
    scroll(callback) {
        this.scrollCallbacks.push(callback);
    }
    clickoff($elements, callback) {
        setTimeout(() => {
            this.$clickoffElements = $elements;
            this.clickoffCallback = callback;
        }, 100);
    }
    resetClickoff() {
        this.clickoffCallback = null;
        this.$clickoffElements = [];
    }   
}
