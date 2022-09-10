<template>
    <admin-layout>
        <div class="mt-8">
            <markdown :markdown="documentation"></markdown>
        </div>
    </admin-layout>
</template>
<script>
import { defineComponent } from "vue";

import AdminLayout from "@/Pages/Application/Admin/Shared/Layout.vue";

import Markdown from "@/Pages/Components/Content/Markdown.vue";

export default defineComponent({
    name: "Admin_Documentation",

    components: {
        AdminLayout,
        Markdown
    },

     props: {
        documentation: {
            type: String,
            required: true,
        },
    },

});
</script>
