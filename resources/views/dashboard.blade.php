<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex">
                <!-- Image 1 -->
                <div class="flex-1 mx-2 image-container" style="display: none;">
                    <a href="https://www.readanybook.online/">
                        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg relative">
                            <img src="https://i.pinimg.com/originals/ee/74/fb/ee74fb1d8e118dab50167dcb9b53a523.png" alt="Image 1" class="w-full h-auto max-h-50">
                            <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-lg font-semibold text-gray-800">Welcome</p>
                        </div>
                    </a>
                </div>

                <!-- Image 2 -->
                <div class="flex-1 mx-2 image-container" style="display: none;">
                    <a href="https://www.readanybook.online/">
                        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg relative">
                            <img src="https://i.pinimg.com/736x/cd/aa/81/cdaa812459c9a6f437579b6e24501839.jpg" alt="Image 2" class="w-full h-auto max-h-50">
                            <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-lg font-semibold text-gray-800">To</p>
                        </div>
                    </a>
                </div>

                <!-- Image 3 -->
                <div class="flex-1 mx-2 image-container" style="display: none;">
                    <a href="https://www.readanybook.online/">
                        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg relative">
                            <img src="https://i.pinimg.com/736x/3f/af/00/3faf00c9c05c2fe5c9d43833a26c9bd4.jpg" alt="Image 3" class="w-full h-auto max-h-50">
                            <p class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center text-lg font-semibold text-gray-800">A Friend!</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let imageContainers = document.querySelectorAll(".image-container");

            imageContainers.forEach((container, index) => {
                setTimeout(() => {
                    container.style.display = "flex";
                    container.style.animation = "fadeIn 0.5s ease-in-out";
                }, index * 500); // Adjust the delay as needed
            });
        });
    </script>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</x-app-layout>
