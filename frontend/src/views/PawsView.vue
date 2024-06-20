<template>
  <div class="h-screen w-screen">
    <div
      class="top-0 z-50"
      :class="[
        'fixed w-full transition-transform duration-300',
        { '-translate-y-full': !isVisible }
      ]"
    >
      <nav class="bg-gray-800 bg-opacity-10 overscroll-auto py-10 lg:py-5">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="@/assets/images/paw-logo.png" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"
              >Pawtastic</span
            >
          </a>
        </div>
      </nav>
    </div>

    <div
      id="banner"
      class="h-full w-full mx-auto flex items-center p-10 banner-background position-fixed"
    >
      <div class="max-w-screen-xl mx-auto flex justify-center items-center lg:justify-end">
        <div class="lg:w-1/3">
          <div class="flex justify-center lg:justify-start gap-3 text-white">
            <a
              class="hover:bg-gray-800 hover:text-white cursor-pointer hover:border hover:border-white rounded-full px-5 py-3 transition ease-in-out delay-150"
              href="#about"
              >About Us</a
            >
            <a
              class="hover:bg-gray-800 hover:text-white cursor-pointer hover:border hover:border-white rounded-full px-5 py-3 transition ease-in-out delay-150"
              href="#appointment"
              >Schedule a Visit</a
            >
          </div>
          <div class="my-10 pt-20 pl-3">
            <h1 class="text-5xl lg:text-7xl font-bold text-white">
              We care for your furry little loved ones while
            </h1>
          </div>
          <div class="w-full flex justify-center lg:justify-start">
            <a
              href="#appointment"
              class="lg:ml-3 rounded-full bg-white p-3 px-10 hover:bg-gray-800 hover:text-white cursor-pointer hover:border hover:border-white"
              >Schedule a Visit</a
            >
          </div>
        </div>
      </div>
    </div>
    <div
      id="about"
      class="h-full w-full py-10 px-5 background-dog top-0 flex flex-col lg:flex-row justify-center items-center"
    >
      <div class="max-w-screen-xl flex flex-col lg:flex-row lg:justify-between lg:gap-10">
        <div class="w-full text-center pr-5 lg:w-1/2 lg:pr-20 lg:pl-5">
          <div class="text-start">
            <h1 class="text-2xl md:text-4xl lg:text-5xl font-bold text-gray-800">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum corporis
            </h1>
            <p class="mt-5 mb-10">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum repudiandae nobis nemo
              velit. In provident, voluptatibus nam dignissimos reiciendis unde magnam dicta totam
              quo excepturi veniam ex modi pariatur quos explicabo consequatur? Repellendus
              veritatis reiciendis perferendis quasi illum saepe sapiente reprehenderit aspernatur
              voluptas. Quis doloremque ad quod!
            </p>
          </div>
          <div class="w-full flex justify-center lg:justify-start">
            <a
              href="#appointment"
              class="rounded-full p-3 px-10 bg-gray-800 text-white cursor-pointer border border-white hover:bg-gray-900"
              >Schedule a Visit</a
            >
          </div>
        </div>
        <div class="w-full h-auto mt-5 lg:w-1/2 grid grid-cols-2 gap-5 px-5 md:px-10 lg:px-20">
          <img class="w-full" src="@/assets/images/dog-img.png" alt="Dog" />
          <img class="w-full" src="@/assets/images/cat-img.png" alt="Cat" />
          <img class="w-full" src="@/assets/images/hamham-img.png" alt="Hamster" />
          <img class="w-full" src="@/assets/images/bird-img.png" alt="Bird" />
        </div>
      </div>
    </div>

    <div
      id="appointment"
      class="h-full w-full background-dog top-0 flex flex-col lg:flex-row-reverse justify-center items-center"
    >
      <div
        class="w-full lg:w-2/3 lg:flex justify-center items-center bg-amber-100 h-full px-10 lg:px-36"
      >
        <div class="mt-10 lg:mt-0 lg:w-1/2">
          <h2 class="text-3xl font-bold mb-10 text-gray-900">
            We'll take your dog for a walk. Just tell us when!
          </h2>

          <div class="flex gap-5 mb-5">
            <div class="w-1/2">
              <div>
                <div>
                  <p class="text-xs lg:text-sm text-gray-500 mb-2">Select Frequency</p>
                </div>
                <div
                  class="bg-white border botder-gray-200 rounded-md flex justify-between p-1.5 lg:p-1"
                >
                  <button
                    class="focus:outline-none focus:bg-amber-300 text-gray-600 px-3 py-1 text-xs lg:text-sm w-1/2 rounded-md"
                  >
                    Recurring
                  </button>
                  <button
                    class="focus:outline-none focus:bg-amber-300 text-gray-600 px-3 py-1 text-xs lg:text-sm w-1/2 rounded-md whitespace-nowrap"
                  >
                    One Time
                  </button>
                </div>
              </div>
            </div>
            <div class="w-1/2">
              <div>
                <p class="text-xs lg:text-sm text-gray-500 mb-2">Select Start Date</p>
              </div>
              <VueDatePicker v-model="date" class=""></VueDatePicker>
            </div>
          </div>
          <!-- days of the week -->
          <div>
            <div>
              <p class="text-xs lg:text-sm text-gray-500 mb-2">Select Days</p>
            </div>
            <div class="bg-white rounded-md flex justify-between p-1">
              <button
                v-for="(day, index) in days"
                :key="index"
                :class="{
                  'bg-amber-300': selectedDays.includes(day),
                  'text-gray-600': !selectedDays.includes(day)
                }"
                @click="toggleDay(day)"
                class="focus:outline-none focus:bg-amber-300 px-2 lg:px-3 py-1 mx-1 text-xs lg:text-sm rounded-md w-full"
              >
                {{ day }}
              </button>
            </div>
            <div>
              <p class="text-xs lg:text-sm text-gray-500 mt-4 mb-2">Select Time</p>
            </div>
            <div class="bg-white rounded-md flex justify-between p-1 px-5">
              <button
                class="w-full focus:outline-none focus:bg-amber-300 text-gray-600 px-3 py-1 text-xs lg:text-sm rounded-md"
              >
                Morning
              </button>
              <button
                class="w-full focus:outline-none focus:bg-amber-300 text-gray-600 px-3 py-1 text-xs lg:text-sm rounded-md"
              >
                Afternoon
              </button>
              <button
                class="w-full focus:outline-none focus:bg-amber-300 text-gray-600 px-3 py-1 text-xs lg:text-sm rounded-md"
              >
                Evening
              </button>
            </div>
            <div class="mt-4">
              <div>
                <p class="text-xs lg:text-sm text-gray-500 mb-2">Note for sitter</p>
              </div>
              <textarea
                name="note"
                id=""
                cols="30"
                rows="5"
                placeholder="Notes for your sitter"
                class="w-full p-2 border rounded-md outline-none text-sm lg:text-base"
              ></textarea>
            </div>
            <div class="my-5">
              <button
                href="#appointment"
                class="rounded-full p-2 lg:p-3 px-5 lg:px-10 text-sm bg-gray-800 text-white cursor-pointer border border-white hover:bg-gray-900"
              >
                Schedule a Visit
              </button>
            </div>
          </div>
        </div>
      </div>
      <div
        class="w-full lg:w-1/3 bg-gray-800 h-full p-5 flex flex-col lg:pt-28 justify-center items-center"
      >
        <div class="">
          <a href="#" class="flex gap-5 lg:mb-5 justify-center lg:justify-start">
            <img src="@/assets/images/paw-logo.png" class="h-10" alt="Flowbite Logo" />
            <span class="text-3xl font-semibold text-white">Pawtastic</span>
          </a>

          <h2 class="text-xl font-bold text-white mb-3 mt-10 lg:mt-20">All services include:</h2>

          <ul class="text-gray-300 list-disc list-inside text-sm lg:text-base">
            <li class="my-3 lg:my-10">Photo and video updates</li>
            <li class="my-3 lg:my-10">Notification upon sitter arrival</li>
            <li class="my-3 lg:my-10">Lorem ipsum dolor sit amet consectetur.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'
import VueDatePicker from '@vuepic/vue-datepicker'
import '@vuepic/vue-datepicker/dist/main.css'

const days = ['Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun']
const selectedDays = ref([])

const toggleDay = (day) => {
  if (selectedDays.value.includes(day)) {
    selectedDays.value = selectedDays.value.filter((selectedDay) => selectedDay !== day)
  } else {
    selectedDays.value.push(day)
  }
}

const date = ref()
const lastScrollY = ref(0)
const isVisible = ref(true)

const handleScroll = () => {
  const currentScrollY = window.scrollY
  isVisible.value = lastScrollY.value > currentScrollY
  lastScrollY.value = currentScrollY
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>

<style>
html {
  scroll-behavior: smooth;
  font-family: 'Open Sans', sans-serif;
}
.banner-background {
  background-image: url('@/assets/images/new-main-banner.png');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
</style>
