<script setup>
import { ref } from 'vue'
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import {Link} from "@inertiajs/vue3";

const desserts = ref([
    {
        name: 'Fisica Aplicada',
        code: '1234',
        description:'Runner class',
        credits:'2',
        teacher_id:'01',
        academic_period:'8'
    },
    {
        name: 'Desarrollo en laravel',
        code: '1235',
        description:'Desarrollo de Software',
        credits:'3',
        teacher_id:'02',
        academic_period:'6'
    },
    {
        name: 'Calculo II',
        code: '1236',
        description:'Robotica',
        credits:'2',
        teacher_id:'03',
        academic_period:'4'
    },
    {
        name: 'Base de Datos',
        code: '1236',
        description:'Modelado de Datos',
        credits:'4',
        teacher_id:'03',
        academic_period:'5'
    },
    {
        name: 'Programacion',
        code: '1237',
        description:'Logica y Algoritmos',
        credits:'4',
        teacher_id:'01',
        academic_period:'2'
    },
    {
        name: 'Redes',
        code: '1238',
        description:'Infraestructura de Redes',
        credits:'3',
        teacher_id:'04',
        academic_period:'4'
    },
    {
        name: 'Sistemas Operativos',
        code: '1239',
        description:'Administracion de Sistemas',
        credits:'3',
        teacher_id:'05',
        academic_period:'5'
    },
    {
        name: 'Ingenieria Software',
        code: '1240',
        description:'Metodologias de Desarrollo',
        credits:'4',
        teacher_id:'02',
        academic_period:'6'
    },
    {
        name: 'Seguridad Informatica',
        code: '1241',
        description:'Proteccion de Sistemas',
        credits:'3',
        teacher_id:'06',
        academic_period:'7'
    },
    {
        name: 'Inteligencia Artificial',
        code: '1242',
        description:'Aprendizaje Automatico',
        credits:'4',
        teacher_id:'07',
        academic_period:'8'
    },
    {
        name: 'Analisis de Sistemas',
        code: '1243',
        description:'Analisis de Requerimientos',
        credits:'3',
        teacher_id:'03',
        academic_period:'4'
    }


])
</script>

<template>
    <authenticated-layout>
        <Link :href="route('courses.create')" class="text-decoration-none">
            <v-btn variant="outlined">
                Agregar Curso
            </v-btn>
        </Link>
        <v-table theme="dark">
            <thead>
            <tr>
                <th class="text-left">
                    Nombre de clase
                </th>
                <th class="text-left">
                    Codigo de clase
                </th>
                <th class="text-left">
                    Descripción
                </th>
                <th class="text-left">
                    Creditos
                </th>
                <th class="text-left">
                    Id_Maestro
                </th>
                <th class="text-left">
                    Id_Maestro
                </th>
                <th class="text-left">
                    Periodo Academico
                </th>
            </tr>
            </thead>
            <tbody>
            <tr
                v-for="item in desserts"
                :key="item.name"
            >
                <td>{{item.name}}</td>
                <td>{{ item.code }}</td>
                <td>{{item.description}}</td>
                <td>{{item.credits}}</td>
                <td>{{item.teacher_id}}</td>
                <td>{{item.academic_period}}</td>
            </tr>
            </tbody>
        </v-table>
    </authenticated-layout>
</template>

<style scoped>

</style>
