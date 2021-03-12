<template>
  <div>
    <div 
    v-if="showForm === false"
    class="d-flex justify-content-between bg-white rounded-lg row p-2 my-2 mx-0 shadow-sm">
      <p class="">{{ computer.name }}</p>
      <button @click="toggleForm" class="btn btn-primary">Modifier</button>
      <form method="post" v-bind:action="`/computers/${this.computer.id}`" class="m-0">
        <input type="hidden" name="_token" :value="csrf">
        <input type="hidden" name="_method" value="delete" />
        <input type="submit" class="btn btn-danger" value="Supprimer"/>
      </form>
    </div>

    <div v-if="showForm">
       <h3 class="border-bottom bg-white m-0 p-2">Modifier le poste</h3>
      <form method="post" v-bind:action="`/computers/${this.computer.id}`" class=" d-flex flex-row bg-white p-2 mx-auto shadow-sm "> 
             
              <label class="col-4">Nom du poste informatique:</label>
           
              <input class="mb-2 form-control" type="text" name="name" required/>
          
              <input type="hidden" name="_token" :value="csrf">
              <input type="hidden" name="_method" value="put">
              <input class="btn btn-primary mx-2" type="submit" value="Mettre à jour" />
              <button @click="toggleForm"
              class="btn btn-danger mx-2">Annuler</button>
         
      </form>
    </div>
  </div>
  
</template>

<script>
export default {
  computed: {},
    props: ['computer'],
  data() {
      return {
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        showForm:false,
      }
  },
  methods: {
      toggleForm: function () {
          this.showForm = !this.showForm;
      }
  },
  mounted () {
  }
};
</script>