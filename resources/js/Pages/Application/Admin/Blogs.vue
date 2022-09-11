<template>
  <admin-layout>
    <breadcrumb
      :application-name="$page.props.applications.app_admin"
      current="Blog"
    ></breadcrumb>

    <page-title> Blog </page-title>
  </admin-layout>
</template>
<script>
import { defineComponent } from "vue";

import AdminLayout from "@/Pages/Application/Admin/Shared/Layout.vue";
import Breadcrumb from "@/Pages/Components/Breadcrumb.vue";

import PageTitle from "@/Pages/Components/Content/PageTitle.vue";

export default defineComponent({
  name: "Admin_Blogs",

  components: {
    AdminLayout,
    Breadcrumb,
    PageTitle,
  },

  props: {
    documentation: {
      type: String,
      required: true,
    },
  },
});
</script>
