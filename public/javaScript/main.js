// function hidePopup() {
//     const popup = document.getElementById("popup");
//     popup.style.display = "none";
// }

// document.getElementById("showPopupButton").addEventListener("click", function () {
//     const popup = document.getElementById("popup");
//     popup.style.display = "block";
// });
// document.getElementById("showPopupButton").addEventListener("click", function () {
//     // This event listener is for the button click.
//     // You can use it to show the popup, but it's not related to form submission.
//     showPopup();
// });

// document.querySelector("form").addEventListener("submit", function (e) {
//     // This event listener is for form submission.
//     // It prevents the default form submission behavior and then shows the popup.
//     e.preventDefault();
//     showPopup();
// });

// function showPopup() {
//     const popup = document.getElementById("popup");
//     popup.style.display = "block";
// }

// function hidePopup() {
//     const popup = document.getElementById("popup");
//     popup.style.display = "none";
// }
// document.getElementById("showPopupButton").addEventListener("click", function () {
//     showPopup();
// });

// document.getElementById("submitForm").addEventListener("submit", function (e) {
//     e.preventDefault(); // Prevent the default form submission behavior
//     showPopup();
// });

// function showPopup() {
//     const popup = document.getElementById("popup");
//     popup.style.display = "block";
// }

// function hidePopup() {
//     const popup = document.getElementById("popup");
//     popup.style.display = "none";
// }





document.getElementById('showPopupButton').addEventListener('click', function (event) {
    event.preventDefault(); // Prevent the default form submission
    showPopup();
});

function showPopup() {
    var popup = document.getElementById('popup');
    popup.style.display = 'block';

    // Add event listener to the form submission button in the popup
    document.getElementById('submitPopupButton').addEventListener('click', function () {
        // Submit the form
        document.querySelector('form').submit();

        // Redirect to another page
        window.location.href = "{{ route('products.index') }}";
    });
}

function hidePopup(event) {
    var popup = document.getElementById('popup');
    popup.style.display = 'none';
}
