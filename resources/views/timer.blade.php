<x-common.layouts.layout>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simple Timer</title>
        {{-- Basic inline CSS for styling the timer --}}
        <style>
           
            #timer-display {
                font-size: 7rem;
                font-family: monospace;
                /* Use monospace for consistent digit width */
            }

            .timer-buttons button {
                padding: 10px 20px;
                margin: 0 5px;
                font-size: 1em;
                cursor: pointer;
                border: none;
                border-radius: 4px;
                color: white;
                transition: background-color 0.3s ease;
            }

            #start-button {
                background-color: #4CAF50;
                /* Green */
            }

            #start-button:hover {
                background-color: #45a049;
            }

            #stop-button {
                background-color: #f44336;
                /* Red */
            }

            #stop-button:hover {
                background-color: #da190b;
            }

            #reset-button {
                background-color: #2196F3;
                /* Blue */
            }

            #reset-button:hover {
                background-color: #0b7dda;
            }

            /* Ensure buttons have a minimum touch target size */
            .timer-buttons button {
                min-width: 80px;
                /* Minimum width */
                min-height: 40px;
                /* Minimum height */
                margin: 5px;
                /* Add some margin for spacing */
            }
        </style>
    </head>

    <body>

        <div class="w-100 min-vh-100 d-flex flex-column align-items-center justify-content-center">
            <div id="timer-display">00:00:00</div>
            <div class="timer-buttons">
                <button id="start-button">Start</button>
                <button id="stop-button">Stop</button>
                <button id="reset-button">Reset</button>
            </div>
        </div>

        {{-- Inline JavaScript for the timer logic --}}
        <script>
            const timerDisplay = document.getElementById('timer-display');
            const startButton = document.getElementById('start-button');
            const stopButton = document.getElementById('stop-button');
            const resetButton = document.getElementById('reset-button');

            let startTime;
            let timerInterval;
            let elapsedTime = 0; // To store time when stopped

            // Function to format time in HH:MM:SS
            function formatTime(ms) {
                const totalSeconds = Math.floor(ms / 1000);
                const hours = Math.floor(totalSeconds / 3600);
                const minutes = Math.floor((totalSeconds % 3600) / 60);
                const seconds = totalSeconds % 60;

                const pad = (num) => String(num).padStart(2, '0');

                return `${pad(hours)}:${pad(minutes)}:${pad(seconds)}`;
            }

            // Function to update the display
            function updateDisplay() {
                const currentTime = Date.now();
                const elapsed = currentTime - startTime + elapsedTime;
                timerDisplay.textContent = formatTime(elapsed);
            }

            // Start button logic
            startButton.addEventListener('click', () => {
                if (!timerInterval) { // Prevent multiple intervals
                    startTime = Date.now() - elapsedTime; // Adjust start time if resuming
                    timerInterval = setInterval(updateDisplay, 1000); // Update every second
                    startButton.disabled = true; // Disable start button while running
                    stopButton.disabled = false;
                    resetButton.disabled = false;
                }
            });

            // Stop button logic
            stopButton.addEventListener('click', () => {
                clearInterval(timerInterval);
                timerInterval = null; // Clear the interval ID
                elapsedTime += Date.now() - startTime; // Store elapsed time
                startButton.disabled = false; // Enable start button
                stopButton.disabled = true;
            });

            // Reset button logic
            resetButton.addEventListener('click', () => {
                clearInterval(timerInterval);
                timerInterval = null;
                elapsedTime = 0; // Reset elapsed time
                timerDisplay.textContent = '00:00:00'; // Reset display
                startButton.disabled = false; // Enable start button
                stopButton.disabled = true; // Disable stop button
                resetButton.disabled = false; // Keep reset enabled or disable based on preference
            });

            // Initial state: Stop button is disabled
            stopButton.disabled = true;

        </script>

    </body>

    </html>

</x-common.layouts.layout>