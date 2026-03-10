<script setup>
import { ref } from 'vue'
import {Link} from "@inertiajs/vue3";

const form = ref()

const items = [
    'Desarrollo de softwares',
    'Calculo II',
    'Base de datos',
    'Redes',
]

const name = ref('')
const nameRules = ref([
    v => !!v || 'Name is required',
    v => (v && v.length <= 10) || 'Name must be 10 characters or less',
])
const select = ref(null)
const checkbox = ref(false)

async function validate () {
    const { valid } = await form.value.validate()

    if (valid) alert('Form is valid')
}
function reset () {
    form.value.reset()
}
function resetValidation () {
    form.value.resetValidation()
}
</script>

<template>

    <Link :href="route('courses.index')" class="text-decoration-none">
        <v-btn variant="outlined">
            Volver
        </v-btn>
    </Link>
    <v-sheet class="mx-auto" width="300">
        <v-form ref="form">
            <v-text-field
                v-model="name"
                :counter="10"
                :rules="nameRules"
                label="Nombre Clase"
                required
            ></v-text-field>

            <v-text-field
                v-model="name"
                :counter="10"
                :rules="nameRules"
                label="Codigo"
                required
            ></v-text-field>

            <v-text-field
                v-model="name"
                :counter="10"
                :rules="nameRules"
                label="Descripción"
                required
            ></v-text-field>

            <v-text-field
                v-model="name"
                :counter="10"
                :rules="nameRules"
                label="Maestro_ID"
                required
            ></v-text-field>

            <v-text-field
                v-model="name"
                :counter="10"
                :rules="nameRules"
                label="Periodo Academico"
                required
            ></v-text-field>


            <v-select
                v-model="select"
                :items="items"
                :rules="[v => !!v || 'Item is required']"
                label="Item"
                required
            ></v-select>

            <v-checkbox
                v-model="checkbox"
                :rules="[v => !!v || 'You must agree to continue!']"
                label="Do you agree?"
                indent-details
                required
            ></v-checkbox>

            <div class="d-flex flex-column">
                <v-btn
                    class="mt-4"
                    color="success"
                    block
                    @click="validate"
                >
                    Validate
                </v-btn>

                <v-btn
                    class="mt-4"
                    color="error"
                    block
                    @click="reset"
                >
                    Reset Form
                </v-btn>

                <v-btn
                    class="mt-4"
                    color="warning"
                    block
                    @click="resetValidation"
                >
                    Reset Validation
                </v-btn>
            </div>
        </v-form>
    </v-sheet>
</template>

<style scoped>

</style>
