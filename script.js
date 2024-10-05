$(document).ready(function () {
    $("#start-btn").on("click", function () {
        $(".intro").hide();
        $(".right").show();
    });

    $("#next-btn").on("click", function () {
        $(".right").hide();
        $(".footer").show();
    });

    $("#prev-btn").on("click", function () {
        $(".footer").hide();
        $(".right").show();
    });

    $("#submit-btn").on("click", function () {
        toastr.success("Thank you for your submission!");

        // Optionally reset the form or navigate to another page
        // document.getElementById("your-form-id").reset();
    });
});

// Show/hide fields based on current status selection
function showFields() {
    const status = document.getElementById("options").value;
    document.getElementById("Student").style.display = status === "Student" ? "block" : "none";
    document.getElementById("Professional").style.display = status === "Professional" ? "block" : "none";
    document.getElementById("Other").style.display = status === "Other" ? "block" : "none";
}


// function updateFamiliarityValue(value) {
//     document.getElementById('familiarity-value').textContent = value;
// }

function showFamiliarityMeaning(value) {
    const meanings = {
        1: "Not familiar at all",
        2: "Slightly familiar",
        3: "Moderately familiar",
        4: "Very familiar",
        5: "Extremely familiar"
    };
    document.getElementById('familiarity-meaning').textContent = meanings[value];
}



// Create and insert the marker line into the slider container
const sliderContainer = document.querySelector('.slider-container');
const marker = document.createElement('div');
marker.className = 'marker';

// Create a span for the text inside the marker
const markerText = document.createElement('span');
markerText.className = 'marker-text';
marker.appendChild(markerText);
sliderContainer.appendChild(marker);

function updateValue(value) {
    const slider = document.getElementById('goal-effectiveness');
    const display = document.getElementById('slider-value');

    // Update the displayed value
    display.textContent = `Selected Value: ${value}%`;
    markerText.textContent = `${value}%`; // Update marker text

    // Calculate the left position for the marker
    const percentage = value / 100;
    const sliderWidth = slider.clientWidth;
    const markerPosition = percentage * sliderWidth;

    // Position the marker
    marker.style.left = `${markerPosition}px`;
}


