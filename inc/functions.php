<?php
    function displayDestination($destination) {
        echo '<div style="display: flex; margin-bottom: 1em; border-bottom: 1px solid #eee; padding-bottom: 1em;">';
        echo '<div style="flex-shrink: 0; margin-right: 1em;"><img src="' . $destination['image'] . '" alt="' . $destination['name'] . '" style="width: 150px; border-radius: 5px; object-fit: cover; height: 100px;"></div>';
        echo '<div><h3>' . $destination['name'] . '</h3><p>' . $destination['description'] . '</p></div>';
        echo '</div>';
    }

    function displayGuide($name, $details) {
        echo '<div class="guide-card">';
        echo '<img src="' . $details['image'] . '" alt="' . $name . '">';
        echo '<div><h3>' . $name . '</h3><p>' . $details['location'] . '</p></div>';
        echo '</div>';
    }

    function displayService($service) {
        echo '<div class="service-item">';
        echo '<i class="fas ' . $service['icon'] . '"></i>';
        echo '<div><h3>' . $service['name'] . '</h3><p>' . $service['description'] . '</p></div>';
        echo '</div>';
    }

    function displayTip($tip) {
        echo '<li>' . $tip . '</li>';
    }
?>