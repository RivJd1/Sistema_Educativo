<template>
    <AuthenticatedLayout>
        <v-card>
            <v-card-title class="pb-4">
                <div class="d-flex justify-space-between align-center w-100">

                    <div class="d-flex align-center">
                        <span class="text-h5 font-weight-bold">Enrolamientos</span>
                    </div>
                </div>
            </v-card-title>

            <v-card-text>
                <v-data-table
                    :headers="headers"
                    :items="enrolamientos"
                    density="compact"
                    item-key="name"
                ></v-data-table>
            </v-card-text>
        </v-card>
<!--&lt;!&ndash;        <Link :href="route('student.create')" class="text-decoration-none">&ndash;&gt;-->
<!--&lt;!&ndash;            <v-btn&ndash;&gt;-->
<!--&lt;!&ndash;                color="primary"&ndash;&gt;-->
<!--&lt;!&ndash;                size="large"&ndash;&gt;-->
<!--&lt;!&ndash;                @click=""&ndash;&gt;-->
<!--&lt;!&ndash;            >&ndash;&gt;-->
<!--&lt;!&ndash;                Nuevo Estudiante&ndash;&gt;-->
<!--&lt;!&ndash;            </v-btn>&ndash;&gt;-->
<!--        </Link>-->
    </AuthenticatedLayout>
</template>
<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Link, usePage} from '@inertiajs/vue3'
import {computed} from 'vue'

export default {
    name: 'Enrolamientos',
    components: {AuthenticatedLayout, Link},
    setup() {
        const page = usePage()

        const enrolamientos = computed(() => page.props.enrollments)

        const headers = [
            {title: 'Enrolamiento', key:'enrollemnt_date'},
            {title: 'Nombre estudiante', key: 'student_name'},
            {title: 'Nombre curso', key: 'course_name'},
            {title: 'Estado', key: 'status'},
        ]

        return {
            headers,
            enrolamientos
        }
    }
}

</script>
<style scoped>

</style>
