<template>
    <AuthenticatedLayout>

        <v-card>
            <v-card-title>
                Registro de estudiantes
            </v-card-title>

            <v-card-text>
                <form>
                    <v-container fluid>
                        <v-row>

                            <v-col cols="12" md="6">
                                <v-text-field
                                    v-model="state.codigo"
                                    :counter="10"
                                    :error-messages="v$.student_code.$errors.map(e => e.$message)"
                                    label="Codigo"
                                    required
                                    base-color="grey"
                                    @blur="v$.student_code.$touch"
                                    @input="v$.student_code.$touch"
                                ></v-text-field>
                            </v-col>


                            <v-col cols="12" md="6">
                                <v-text-field
                                    v-model="state.name"
                                    :counter="10"
                                    :error-messages="v$.name.$errors.map(e => e.$message)"
                                    label="Name"
                                    required
                                    base-color="grey"
                                    @blur="v$.name.$touch"
                                    @input="v$.name.$touch"
                                ></v-text-field>
                            </v-col>


                            <v-col cols="12" md="6">
                                <v-text-field
                                    v-model="state.email"
                                    :error-messages="v$.email.$errors.map(e => e.$message)"
                                    label="E-mail"
                                    required
                                    @blur="v$.email.$touch"
                                    @input="v$.email.$touch"
                                ></v-text-field>
                            </v-col>

                            <v-col cols="12" md="6">
                                <v-text-field
                                    v-model="state.semester"
                                    :error-messages="v$.semester.$errors.map(e => e.$message)"
                                    label="Semestre"
                                    required
                                    @blur="v$.semester.$touch"
                                    @input="v$.semester.$touch"
                                ></v-text-field>
                            </v-col>


                            <v-col cols="12" md="6">
                                <v-select
                                    v-model="state.id"
                                    :error-messages="v$.select.$errors.map(e => e.$message)"
                                    :items="faculties"
                                    label="Facultades"
                                    item-title="name"
                                    item-value="id"
                                    variant="outlined"
                                    density="comfortable"
                                    required
                                    @blur="v$.select.$touch"
                                    @change="v$.select.$touch"
                                ></v-select>
                            </v-col>

                            <v-col cols="12" md="6">
                                <v-select
                                    v-model="state.items"
                                    :error-messages="v$.select.$errors.map(e => e.$message)"
                                    :items="items"
                                    label="Estados"
                                    item-title="name"
                                    item-value="id"
                                    variant="outlined"
                                    density="comfortable"
                                    required
                                    @blur="v$.select.$touch"
                                    @change="v$.select.$touch"
                                ></v-select>
                            </v-col>


                            <v-col cols="12">
                                <v-btn
                                    class="me-4"
                                    @click="v$.$validate"
                                >
                                    submit
                                </v-btn>
                            </v-col>

                        </v-row>

                    </v-container>
                </form>
            </v-card-text>
        </v-card>

    </AuthenticatedLayout>
</template>

<script>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Link, usePage} from '@inertiajs/vue3'
import {computed} from 'vue'


import {reactive} from 'vue'
import {useVuelidate} from '@vuelidate/core'
import {email, required, helpers,} from '@vuelidate/validators'

export default {
    name: 'Create',
    components: {AuthenticatedLayout, Link},
    setup() {
        const page = usePage()

        const faculties = computed(() => page.props.faculties)

        const form = {
            student_code:'',
            name: '',
            email: '',
            select: null,
            checkbox: null,
            semester: '',
            status: '',
            faculty_id: '',
        }

        const state = reactive({
            ...form,
        })

        const items = [
            'ACTIVE',
            'INACTIVE'
        ]

        const rules = {
            student_code: {required: helpers.withMessage('Codigo invalido', required),},
            name: {required: helpers.withMessage('Nombre es Obligatorio', required),},
            email: {required: helpers.withMessage('El correo es invalido', required), email},
            semester: {required: helpers.withMessage('Ese semestre no existe', required),},
            select: {required},
            items: {required},
            checkbox: {required},
        }

        const v$ = useVuelidate(rules, state)


        return {
            // headers,
            faculties,
            v$,
            state,
            rules,
            items,
            form,
        }
    }
}

</script>

<style scoped>

</style>
