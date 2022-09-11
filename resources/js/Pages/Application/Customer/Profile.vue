<template>
  <admin-layout>
    <breadcrumb
      :application-name="$page.props.applications.app_customer"
      current="Persönliche Einstellungen"
    ></breadcrumb>

    <profile :sessions="sessions"></profile>
  </admin-layout>
</template>
<script>
import { defineComponent } from "vue";
import AdminLayout from "@/Pages/Application/Customer/Shared/Layout.vue";
import Breadcrumb from "@/Pages/Components/Breadcrumb.vue";

import Profile from "@/Pages/Components/Profile.vue";

export default defineComponent({
    name: "Customer_Profile",

    components: {
        AdminLayout,
        Breadcrumb,
        Profile
    },

    props: {
        sessions: {
            type: Object,
            default: () => ({}),
        }
    }
});
</script>
