<template>
  <admin-layout>
    <breadcrumb
      :application-name="$page.props.applications.app_admin"
      :start-page="true"
    ></breadcrumb>

    <page-title>
      Herzlich Willkommen im Dashboard für Administratoren!
    </page-title>

    <section class="mt-8">
      <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
        <navigation-card title="Datev-Cloud-Liste" :buttonTwo="false">
          <template #icon> <icon-chat-alt /> </template>
          <template #description>
            Hier kannst du eine Liste aller Anwender anzeigen
          </template>
          <template #buttonOne>
            <Link :href="route('admin.user.index')" class="flex items-center">
              <icon-card-list class="h-4 w-4 mr-1" />Liste
            </Link>
          </template>
        </navigation-card>
      </div>
    </section>

    <section class="mt-8">
      <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <statistic-value
          :with-link="false"
          :with-icon="true"
          icon="icon-users"
          label="Anzahl der Anwender"
          value-type="number"
          :after-digits="0"
          value-unit="Anwender"
          :value="counts.users"
        ></statistic-value>
        <statistic-value
          :with-link="false"
          :with-icon="true"
          icon="icon-users"
          label="Anzahl der Kunden"
          value-type="number"
          :after-digits="0"
          value-unit="Kunden"
          :value="counts.customers"
        ></statistic-value>
        <statistic-value
          :with-link="false"
          :with-icon="true"
          icon="icon-users"
          label="Anzahl der Mitarbeiter"
          value-type="number"
          :after-digits="0"
          value-unit="Mitarbeiter"
          :value="counts.employees"
        ></statistic-value>
        <statistic-value
          :with-link="false"
          :with-icon="true"
          icon="icon-users"
          label="Anzahl der Administratoren"
          value-type="number"
          :after-digits="0"
          value-unit="Administratoren"
          :value="counts.admins"
        ></statistic-value>
      </div>
    </section>
  </admin-layout>
</template>
<script>
import { defineComponent } from "vue";

import { Link } from "@inertiajs/inertia-vue3";

import AdminLayout from "@/Pages/Application/Admin/Shared/Layout.vue";
import Breadcrumb from "@/Pages/Components/Breadcrumb.vue";

import PageTitle from "@/Pages/Components/Content/PageTitle.vue";

import NavigationCard from "@/Pages/Components/Content/NavigationCard.vue";

import StatisticValue from "@/Pages/Components/Content/StatisticValue.vue";

import IconChatAlt from "@/Pages/Components/Icons/ChatAlt.vue";
import IconCardList from "@/Pages/Components/Icons/CardList.vue";

export default defineComponent({
  name: "Admin_Dashboard",

  components: {
    Link,
    AdminLayout,
    Breadcrumb,
    PageTitle,
    NavigationCard,
    StatisticValue,
    IconChatAlt,
    IconCardList,
  },

  props: {
    counts: {
      type: Object,
      default: () => ({}),
    },
  },
});
</script>
