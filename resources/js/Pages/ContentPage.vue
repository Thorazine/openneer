<template>
    <div class="min-h-screen bg-[#eeeeee] font-sans text-[#363636] px-4 pb-8 pt-[110px] md:px-8" :style="{ fontFamily: 'Open Sans, sans-serif' }">
        <!-- Language Switcher -->
        <div class="relative max-w-[1170px] mx-auto h-0 z-10 w-full hidden md:block">
             <a :href="language === 'nl' ? '/en' : '/nl'" class="float-right block w-[30px] h-[30px] ml-[5px] mt-[-20px] md:mt-0">
                  <img :src="language === 'nl' ? '/images/en.png' : '/images/nl.png'" class="w-full h-full object-contain">
             </a>
        </div>
        <div class="max-w-[1140px] mx-auto bg-white shadow-sm min-h-[calc(100vh-4rem)]">
            <!-- Header -->
            <header class="text-center py-4 md:py-6 px-4">
                <div class="w-[180px] h-[180px] bg-stone-200 rounded-full mx-auto mb-8 -mt-[105px] overflow-hidden relative border-4 border-[#eeeeee] shadow-sm">
                    <img src="/images/me.jpg" alt="Matthijs" class="w-full h-full object-cover">
                </div>
                <h1 class="text-[#363636] font-light leading-relaxed uppercase tracking-normal text-center">
                    <span class="block text-[35px] font-[800] mb-0">{{ content.hero.intro }}</span>
                    <div class="font-bold md:whitespace-nowrap leading-none">
                        <span class="text-[25px]">{{ content.hero.prefix }}</span>
                        <span class="text-[25px] text-accent-primary mx-1">{{ content.hero.name }}</span>
                        <span class="text-[18.75px] text-[#999999] md:align-top block md:inline">{{ content.hero.role }}</span>
                        <span class="text-[25px] md:ml-1 block md:inline">{{ content.hero.subtitle }}</span>
                    </div>
                    <div class="w-full h-[3px] border-t border-b border-[#eeeeee] mt-3"></div>
                </h1>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-0">
                <!-- Main Content (Left) -->
                <div class="md:col-span-7 p-8 md:pr-12 md:pl-12 md:border-r border-[#eeeeee]">
                    <!-- Experience -->
                    <section class="mb-12">
                        <h2 class="text-accent-primary font-bold text-lg mb-1 uppercase">// {{ content.sections.experience }}</h2>
                        <div v-for="(job, index) in content.experience" :key="index" class="mb-8 last:mb-0 grid grid-cols-1 sm:grid-cols-12 gap-4">
                            <div class="sm:col-span-4">
                                <div class="font-bold text-[#363636]">{{ job.company }}</div>
                                <div class="text-xs text-[#999999] italic">{{ job.year }}</div>
                            </div>
                            <div class="sm:col-span-8">
                                <h3 class="font-bold text-[#363636]">{{ job.role }}</h3>
                                <p class="text-[13px] leading-[20px] text-[#666666] font-semibold">{{ job.description }}</p>
                            </div>
                        </div>
                    </section>

                    <!-- About -->
                    <section class="mb-12">
                        <h2 class="text-accent-primary font-bold text-lg mb-1 uppercase">// {{ content.sections.about }}</h2>
                        <p class="text-[13px] leading-relaxed text-[#666666] font-medium">{{ content.about }}</p>
                    </section>

                    <!-- Education (Conditional) -->
                    <section v-if="content.education && content.education.length > 0" class="education relative">
                        <h2 class="text-accent-primary font-bold text-lg mb-4 uppercase">// {{ content.sections.education }}</h2>

                        <div v-for="(edu, index) in content.education" :key="index" class="relative pl-[70px] mb-8 last:mb-0">
                            <!-- Timeline Year & Line -->
                            <div class="absolute left-0 top-[12px] w-[55px] text-center font-bold text-[15px] text-[#363636] leading-[1.2] bg-white z-10 py-1">
                                {{ edu.year }}
                            </div>

                            <!-- Vertical Line Segment -->
                            <div class="absolute left-[25px] top-0 bottom-[-32px] w-[5px]"
                                 :class="{ 'bg-accent-primary': index !== 0 && index !== content.education.length - 1, 'bg-gradient-to-b from-accent-primary to-white': index === content.education.length - 1 }"
                                 :style="index === 0 ? 'background: linear-gradient(to bottom, #ffffff 0px, #f0563d 10px, #f0563d 100%);' : ''">
                            </div>

                            <!-- Content Box -->
                            <div class="relative bg-[#eeeeee] p-[10px] text-[#363636]">
                                <!-- Triangle Arrow -->
                                <div class="absolute left-[-5px] top-[19px] w-[10px] h-[10px] bg-[#eeeeee] transform rotate-45"></div>

                                <h3 class="font-bold text-[16px] leading-[1.2] mb-1">
                                    {{ edu.school }} <span v-if="edu.course">- {{ edu.course }}</span>
                                </h3>
                                <p v-if="edu.description" class="text-[13px] text-[#666666] font-medium leading-relaxed">
                                    {{ edu.description }}
                                </p>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Sidebar (Right) -->
                <aside class="md:col-span-5 p-8 md:pl-10 bg-[#fbfbfb]">
                    <!-- Contact -->
                    <section class="mb-12">
                        <h2 class="text-accent-primary font-bold text-lg mb-1 uppercase">// {{ content.sections.contact }}</h2>
                        <div v-for="(val, key) in content.contact" :key="key" class="flex items-start mb-0 h-[48px]">
                            <div class="w-[47px] h-[47px] flex items-center justify-center border-r border-b border-[#d9d9d9] flex-shrink-0 text-[#d9d9d9] text-[20px]">
                                <i :class="getIcon(key)"></i>
                            </div>
                            <div class="pl-[11px] flex flex-col justify-center h-[47px]">
                                <span v-if="getLabel(key)" class="text-[16px] font-bold text-[#363636] leading-none mb-[2px]">
                                    {{ getLabel(key) }}
                                </span>
                                <h3 class="text-[13px] text-[#363636] m-0 leading-none" :class="{ 'font-bold': true }">
                                    <a :href="key === 'email' ? 'mailto:' + val : 'https://' + val" class="hover:text-accent-primary transition-colors"
                                       :class="getLabel(key) ? 'text-[12px] font-normal' : 'text-[16px] font-bold'">
                                        {{ getDisplayText(key, val) }}
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </section>

                    <!-- Skills -->
                    <section class="mb-12">
                        <h2 class="text-accent-primary font-bold text-lg mb-1 uppercase">// {{ content.sections.skills }}</h2>
                        <div v-for="(skill, index) in content.skills" :key="index" class="mb-3">
                            <div class="h-7 bg-[#eeeeee] relative w-full rounded-sm overflow-hidden">
                                <div class="h-full bg-accent-primary flex items-center px-3 text-[11px] font-bold text-white uppercase transition-all duration-1000 ease-out" :style="{ width: isLoaded ? skill.percent + '%' : '0%' }">
                                    {{ skill.name }}
                                </div>
                            </div>
                        </div>
                         <!-- Scale -->
                        <div class="relative h-10 mt-6 pt-5">
                            <div class="absolute top-0 w-full h-[3px] bg-[#d1d1d1]"></div>

                            <!-- Indicators -->
                            <div class="absolute top-0 w-[3px] h-[10px] bg-[#d1d1d1] left-0"></div>
                            <div class="absolute top-0 w-[3px] h-[10px] bg-[#d1d1d1] left-[25%]"></div>
                            <div class="absolute top-0 w-[3px] h-[10px] bg-[#d1d1d1] left-[75%]"></div>
                            <div class="absolute top-0 w-[3px] h-[10px] bg-[#d1d1d1] right-0"></div>

                            <!-- Labels -->
                            <div class="absolute top-5 text-[12px] text-[#d1d1d1] left-0 transform -translate-x-0">Beginner</div>
                            <div class="absolute top-5 text-[12px] text-[#d1d1d1] left-[25%] transform -translate-x-1/2">Bedreven</div>
                            <div class="absolute top-5 text-[12px] text-[#d1d1d1] left-[75%] transform -translate-x-1/2">Expert</div>
                            <div class="absolute top-5 text-[12px] text-[#d1d1d1] right-0 transform translate-x-0">Master</div>
                        </div>
                    </section>



                    <!-- Tags -->
                    <section class="mb-12">
                         <div class="block">
                             <div v-for="tag in content.tags" :key="tag" class="inline-block bg-accent-secondary text-white text-[13px] font-bold px-[14px] py-[7px] rounded-[2px] mr-[5px] mb-[5px]">
                                 {{ tag }}
                             </div>
                         </div>
                    </section>

                    <!-- Languages -->
                    <section class="mb-12">
                        <h2 class="text-accent-primary font-bold text-lg mb-1 uppercase">// {{ content.sections.languages }}</h2>
                         <div v-for="(language, index) in content.languages" :key="index" class="flex justify-between items-center mb-0 h-[30px] border-b border-[#eeeeee] last:border-0">
                            <div class="text-[13px] font-bold text-[#363636]">{{ language.name }}</div>
                            <div class="text-[10px]">
                                 <i v-for="n in 5" :key="n" class="fa-solid fa-star ml-[1px]" :class="n <= language.stars ? 'text-accent-primary' : 'text-[#d9d9d9]'"></i>
                            </div>
                        </div>
                    </section>

                    <!-- Hobbies -->
                    <section class="mb-12">
                        <h2 class="text-accent-primary font-bold text-lg mb-1 uppercase">// {{ content.sections.hobbies }}</h2>
                        <div class="block">
                             <div v-for="hobby in content.hobbies" :key="hobby" class="inline-block bg-accent-secondary text-white text-[13px] font-bold px-[14px] py-[7px] rounded-[2px] mr-[5px] mb-[5px]">
                                 <i :class="getHobbyIcon(hobby)" class="mr-1 text-[13px]"></i> {{ hobby }}
                             </div>
                        </div>
                    </section>

                    <!-- Language Switcher -->
                    <div class="mt-12 pt-12 border-t border-[#eeeeee] text-center">
                         <a href="/" class="text-[#999999] hover:text-accent-primary text-xs font-bold tracking-widest">HOME</a>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const props = defineProps({
    language: String,
    initialContent: [Object, String]
});

const content = ref(typeof props.initialContent === 'string' ? JSON.parse(props.initialContent) : props.initialContent);
const isLoaded = ref(false);

onMounted(() => {
    setTimeout(() => {
        isLoaded.value = true;
    }, 100);
});

const getLabel = (key) => {
    if (key === 'github') return 'Github';
    if (key === 'linkedin') return 'LinkedIn';
    return null;
};

const getDisplayText = (key, val) => {
    if (key === 'linkedin') return 'LinkedIn';
    if (key === 'github') return 'https://' + val;
    return val;
};

const getIcon = (key) => {
    const icons = {
        email: 'fa-regular fa-envelope', // fa-envelope-o in v4
        github: 'fa-brands fa-github',
        linkedin: 'fa-brands fa-linkedin-in'
    };
    return icons[key] || 'fa-solid fa-link';
};

const getHobbyIcon = (hobby) => {
    const input = hobby.toLowerCase();
    if (input.includes('mountain')) return 'fa-solid fa-bicycle';
    if (input.includes('thai')) return 'fa-solid fa-hand-fist'; // Boxing/fighting
    if (input.includes('enginering') || input.includes('engineering')) return 'fa-solid fa-cogs';
    if (input.includes('program')) return 'fa-solid fa-code';
    if (input.includes('film')) return 'fa-solid fa-film';
    if (input.includes('golf')) return 'fa-solid fa-golf-ball-tee';
    if (input.includes('game')) return 'fa-solid fa-gamepad';
    return 'fa-solid fa-star';
};
</script>

<style>
/* FontAwesome loaded in layout */
</style>
