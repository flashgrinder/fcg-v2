const customSelect = document.querySelectorAll(".custom-select");    
const customSelectOption = document.querySelectorAll(".custom-select__option");
const customSelectContainer = document.querySelectorAll(".custom-select__container");


function selectOption() {

    for (const option of customSelectOption) {

    option.addEventListener("click", function () {

            if ( !this.classList.contains("is-selected") ) {

                this.parentNode.querySelector(".custom-select__option.is-selected").classList.remove("is-selected");
                this.classList.add("is-selected");
                this.closest(".custom-select__container").querySelector(".custom-select__trigger .custom-select__trigger-text").textContent = this.textContent;

            }

        });

    }
}

function selectDpordown() {

    for (const dropdown of customSelect) {

        dropdown.addEventListener("click", function () {

            this.querySelector(".custom-select__container").classList.toggle("is-open");

        });

    }

}

function selectNonTarget() {

    window.addEventListener("click", function (e) {

        for (const select of customSelectContainer) {

            if (!select.contains(e.target)) {

                select.classList.remove("is-open");

            }

        }

    });
}

function init() {
    selectOption();
    selectDpordown();
    selectNonTarget();
}

export default {init}
