<template>
<div>
    <button
    @click="toggleForm" 
    class="py-2 text-center border border-dark d-block rounded-lg text-dark mb-2"  
    v-if="btnToggle">+ Créer un poste</button>

    <div v-if="showForm" class="">
       
        <form method="post" action="/computers" class="d-flex flex-column bg-white p-4 mx-auto shadow-sm"> 
         <h3 class="border-bottom">Créer un nouveau poste</h3>
            <label>Nom du poste informatique:</label>
            <input class="mb-2 form-control" type="text" name="name" required/>
            <div>
                <input type="hidden" name="_token" :value="csrf">
                <input class="btn btn-primary mt-2" type="submit" value="Créer" />
                <button @click="toggleForm"
                class="btn btn-danger mt-2">Annuler</button>
            </div>
        </form>
    </div>
</div>
</template>

<script>

export default {
    computed: {},
    data() {
        return {
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            btnToggle: true,
            showForm: false,
        }
    },
    methods: {
        toggleForm: function () {
            this.btnToggle = !this.btnToggle;
            this.showForm = !this.showForm;
        }
    }
};
</script>