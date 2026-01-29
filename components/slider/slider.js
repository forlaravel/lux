export default function (Alpine) {
    // Global mouse/touch move and up handlers for slider dragging
    document.addEventListener('mousemove', (e) => {
        document.querySelectorAll('[role="slider"]').forEach(el => {
            if (el._x_dataStack && el._x_dataStack[0]?.dragging) {
                el._x_dataStack[0].updateFromEvent(e);
            }
        });
    });
    document.addEventListener('mouseup', () => {
        document.querySelectorAll('[role="slider"]').forEach(el => {
            if (el._x_dataStack && el._x_dataStack[0]?.dragging) {
                el._x_dataStack[0].dragging = false;
            }
        });
    });
    document.addEventListener('touchmove', (e) => {
        document.querySelectorAll('[role="slider"]').forEach(el => {
            if (el._x_dataStack && el._x_dataStack[0]?.dragging) {
                el._x_dataStack[0].updateFromEvent(e.touches[0]);
            }
        });
    });
    document.addEventListener('touchend', () => {
        document.querySelectorAll('[role="slider"]').forEach(el => {
            if (el._x_dataStack && el._x_dataStack[0]?.dragging) {
                el._x_dataStack[0].dragging = false;
            }
        });
    });
}
