<template>
  <div class="bg-white text-gray-900 dark:bg-gray-900 dark:text-white shadow-lg rounded-lg p-2">
    <div class="relative w-full flex flex-col items-center justify-center">
      <div class="h-6 sm:h-8 w-6 sm:w-8 text-accent">
        <slot name="icon"></slot>
      </div>

      <h1 class="mt-4 text-base sm:text-xl text-center font-semibold h-12">
        {{ title }}
      </h1>

      <p class="mt-2 text-xs sm:text-sm text-center h-24">
        <slot name="description"></slot>
      </p>
      <div class="w-full absolute bottom-0 left-0">
        <div
          class="flex items-center justify-center"
          :class="{ 'justify-between': buttonTwo }"
        >
          <div>
            <button
              class="
                mt-4
                px-4
                py-1
                font-medium
                text-sm
                tracking-wide
                transition-colors
                duration-200
                transform
                bg-primary
                text-on-primary
                rounded-md
                hover:bg-hover-primary hover:text-hover-on-primary
                focus:outline-none focus:bg-hover-primary
              "
            >
              <slot name="buttonOne"></slot>
            </button>
          </div>
          <div v-if="buttonTwo">
            <button
              class="
                mt-4
                px-4
                py-1
                font-medium
                text-sm
                tracking-wide
                transition-colors
                duration-200
                transform
                bg-primary
                text-on-primary
                rounded-md
                hover:bg-hover-primary hover:text-hover-on-primary
                focus:outline-none focus:bg-hover-primary
              "
            >
              <slot name="buttonTwo"></slot>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  name: "NavigationCard",
  //
  props: {
    title: {
      type: String,
      required: true,
    },
    buttonTwo: {
      type: Boolean,
      default: false,
    },
  },
};
</script>
