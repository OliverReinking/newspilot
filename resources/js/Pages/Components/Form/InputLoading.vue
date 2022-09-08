<template>
    <div
        v-if="loading"
        class="p-4 mb-4 text-sm text-gray-700 dark:text-gray-200 bg-blue-100 dark:bg-blue-600
               rounded-lg ease-in-out duration-1000"
        role="alert"
    >
        <div class="flex items-center">
            <svg
                role="status"
                class="mr-2 w-8 h-8 text-blue-400 dark:text-blue-700 animate-spin dark:text-gray-600
                       fill-blue-800 dark:fill-blue-200"
                viewBox="0 0 100 101"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
            ...
            </svg>
            <div class="ml-2">{{ loadingText }}</div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Form_InputLoading",
    props: {
        loading: {
            type: Boolean,
            default: false,
        },
        loadingText: {
            type: String,
            default: "",
        },
    },
};
</script>
