<template>
    <employee-layout>
        <div class="mt-4 font-logo text-2xl text-extrabold text-center">
            Herzlich Willkommen im Dashboard für Mitarbeiter!
        </div>
    </employee-layout>
</template>
<script>
import { defineComponent } from "vue";

import EmployeeLayout from "@/Pages/Application/Employee/Shared/Layout.vue";

export default defineComponent({
    name: "Employee_Dashboard",

    components: {
        EmployeeLayout,
    },
});
</script>
