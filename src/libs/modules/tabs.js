const content = document.querySelectorAll(".tab__content");
const tabs = document.querySelectorAll(".tab");

function toggleShow() {
    const target = this;
    const item = target.classList.contains("tab")
        ? target
        : target.parentElement;
    const group = item.dataset.actabGroup;
    const id = item.dataset.actabId;

    tabs.forEach(function(tab) {
        if (tab.dataset.actabGroup === group) {
            if (tab.dataset.actabId === id) {
                tab.classList.add("tab--active");
            } else {
                tab.classList.remove("tab--active");
            }
        }
    });

    content.forEach(function(label) {
        const tabItem = label.parentElement;

        if (tabItem.dataset.actabGroup === group) {
            if (tabItem.dataset.actabId === id) {
                tabItem.classList.add("tab--active");
            } else {
                tabItem.classList.remove("tab--active");
            }
        }
    });
}

function init() {

    content.forEach(function(label) {
        label.addEventListener("click", toggleShow);
    });
    
    tabs.forEach(function(tab) {
        tab.addEventListener("click", toggleShow);
    });

}

export default {init}