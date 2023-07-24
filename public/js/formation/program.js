var counter = 1;
// Wait for the DOM to be fully loaded before attaching event listeners
document.addEventListener("DOMContentLoaded", function () {
    // Get references to the "Add" button
    const addButtons = document.getElementsByClassName("btn-add-title");
    for (let i = 0; i < addButtons.length; i++) {
        const addButton = addButtons[i];
        const inputContainer = addButton.parentElement;
        // Add a click event listener to the "Add" button
        addButton.addEventListener("click", function () {
            // Clone the original input field
            const originalDivContainer = inputContainer.querySelector("div");
            const clonedDivContainer = originalDivContainer.cloneNode(true);
            const clonedInputField = clonedDivContainer.querySelector("input");
            // Clear the value of the cloned input field
            clonedInputField.value = "";
            // Clear the id of the cloned input field
            clonedInputField.id = "";
            // attach onfocus/ event listener
            clonedInputField.addEventListener('focus', function (e) {
                this.parentElement.classList.add('is-focused');
            }, false);
            clonedInputField.onkeyup = function (e) {
                if (this.value != "") {
                    this.parentElement.classList.add('is-filled');
                } else {
                    this.parentElement.classList.remove('is-filled');
                }
            };
            clonedInputField.addEventListener('focusout', function (e) {
                if (this.value != "") {
                    this.parentElement.classList.add('is-filled');
                }
                this.parentElement.classList.remove('is-focused');
            }, false);
            // Append the cloned input field to the container
            inputContainer.insertBefore(clonedDivContainer, originalDivContainer.nextSibling);
        });
    }
});
