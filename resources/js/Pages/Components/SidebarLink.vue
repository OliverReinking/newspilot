<template>
  <Link
    :href="route(routeName)"
    class="flex items-center px-2 py-2 mt-2 transition duration-1000 transform"
    :class="[route().current(routeName) ? activeClass : inactiveClass]"
  >
    <component v-bind:is="icon" class="w-5 h-5 mr-2" />
    <span class="text-sm mx-2">{{ label }}</span>
  </Link>
</template>
<script>
import { defineComponent, ref } from "vue";
import { Link } from "@inertiajs/inertia-vue3";

import IconChartBar from "@/Pages/Components/Icons/ChartBar.vue";
import IconChartPie from "@/Pages/Components/Icons/ChartPie.vue";
import IconCollection from "@/Pages/Components/Icons/Collection.vue";
import IconNewspaper from "@/Pages/Components/Icons/Newspaper.vue";
import IconUsers from "@/Pages/Components/Icons/Users.vue";
import IconViewGrid from "@/Pages/Components/Icons/ViewGrid.vue";
import IconDocumentText from "@/Pages/Components/Icons/DocumentText.vue";

export default defineComponent({
  name: "Component_SidebarLink",
  //
  components: {
    Link,
    IconChartBar,
    IconChartPie,
    IconCollection,
    IconNewspaper,
    IconUsers,
    IconViewGrid,
    IconDocumentText,
  },

  props: {
    icon: {
      type: String,
      default: null,
    },
    label: {
      type: String,
      required: true,
    },
    routeName: {
      type: String,
      required: true,
    },
  },

  setup(props) {
    const activeClass = ref(
      "bg-gray-500 dark:bg-gray-600 text-gray-200 dark:text-gray-200 border-l-4 border-green-500"
    );
    const inactiveClass = ref(
      "bg-gray-200 dark:bg-gray-800 text-gray-500 dark:text-white border-l-4 border-transparent hover:bg-gray-500 dark:hover:bg-gray-500 hover:text-white dark:hover:text-white hover:border-green-500"
    );

    return {
      activeClass,
      inactiveClass,
    };
  },
});
</script>
