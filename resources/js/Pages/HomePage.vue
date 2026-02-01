<template>
    <div class="min-h-screen flex items-center justify-center bg-stone-100">
        <div class="bg-white p-8 md:p-12 rounded shadow-sm text-center">
            <h1 class="text-2xl font-light text-stone-800 mb-8">Select Language</h1>
            <div class="flex justify-center gap-8">
                <a href="/nl" class="group flex flex-col items-center gap-2">
                    <div class="w-16 h-10 bg-gray-200 border border-gray-300 relative overflow-hidden shadow-sm group-hover:scale-105 transition-transform duration-200">
                        <div class="bg-[#AE1C28] h-1/3 w-full"></div>
                        <div class="bg-white h-1/3 w-full"></div>
                        <div class="bg-[#21468B] h-1/3 w-full"></div>
                    </div>
                    <span class="text-xs text-stone-500 font-bold group-hover:text-stone-800">NEDERLANDS</span>
                </a>

                <a href="/en" class="group flex flex-col items-center gap-2">
                     <div class="w-16 h-10 bg-gray-200 border border-gray-300 relative overflow-hidden shadow-sm group-hover:scale-105 transition-transform duration-200">
                        <div class="absolute inset-0 bg-[#012169]"></div>
                         <!-- Union Jack simplified cross -->
                        <div class="absolute inset-0 flex items-center justify-center">
                             <div class="w-full h-1/5 bg-white absolute"></div>
                             <div class="h-full w-1/5 bg-white absolute"></div>
                             <div class="w-full h-[10%] bg-[#C8102E] absolute"></div>
                             <div class="h-full w-[10%] bg-[#C8102E] absolute"></div>
                        </div>
                    </div>
                    <span class="text-xs text-stone-500 font-bold group-hover:text-stone-800">ENGLISH</span>
                </a>
            </div>
        </div>
    </div>
</template>

<script setup>
// Minimal logic
</script>
