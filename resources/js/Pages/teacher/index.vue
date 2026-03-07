<script setup>
import { ref } from 'vue'
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const desserts = ref([
    {
        employee_code: '333',
        speacialty: 'ff',
        hire:'e',
        status:'e',
    },
])
</script>

<template>
    <authenticated-layout>
        <v-table theme="dark">
            <thead>
            <tr>
                <th class="text-left">
                    Codigo Empleado
                </th>
                <th class="text-left">
                    Especialidad
                </th>
                <th class="text-left">
                    Contratado
                </th>
                <th class="text-left">
                    Estado
                </th>
            </tr>
            </thead>
            <tbody>
            <tr
                v-for="item in desserts"
                :key="item.name"
            >
                <td>{{item.employee_code}}</td>
                <td>{{ item.speacialty }}</td>
                <td>{{item.hire}}</td>
                <td>{{item.status}}</td>
            </tr>
            </tbody>
        </v-table>
    </authenticated-layout>
</template>

<style scoped>

</style>
