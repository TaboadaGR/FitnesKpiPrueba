<template>
    
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Título</th>
      <th scope="col">Descripción</th>
    </tr>
  </thead>
  <tbody> 
    <tr v-for="task in result" v-bind:key="task.id">
    <td>{{ task. id }}</td>
    <td>{{ task. Titulo}}</td>
    <td>{{ task. Descripcion }}</td>
    </tr>
  </tbody>
</table>
<br>

<form @submit.prevent="saved">
  <div class="form-group">
    <label for="exampleFormControlInput1">Título del nuevo Secreto</label>
    <input type="txt" v-model =' secretos.Titulo' class="form-control" id="exampleFormControlInput1" placeholder="El secreto de .......">
  </div>
  <br>
  <div class="form-group">
    <label for="exampleFormControlInput1">El nuevo Secreto</label>
    <input type="txt" v-model='secretos.Descripcion' class="form-control" id="exampleFormControlInput1" placeholder="El secreto de .......">
  </div>
  <br>
  <button type="submite" class="btn btn-primary "> Submit</button>
  
</form>

</template>

<script>


import * as Vue from 'vue' // in Vue 3
import axios from 'axios'
import VueAxios from 'vue-axios'

const app = Vue.createApp()
app.use(VueAxios, axios)

    export default {
        name:'main',
        data(){
            return{
                result:{},
                secretos:{
                    id:'',
                    Titulo:'',
                    Descripcion:'',
                }
            }
        },
    created(){
        this.SecretosloadTaks();
    },
    methods: {
            SecretosloadTaks()  
            {

                var page = "http://127.0.0.1:8000/api/Secretos";
                axios.get(page)
                .then(
                    ({data})=>{
                        console.log(data);
                        this.result = data;
                    }
                );
            },
        },

        saved(){
            this.saveDate();
        },

       async saveDate(){
            await this.axios.post("http://127.0.0.1:8000/api/save", this.secretos)
            .then(({data})=>{
              console.log("enta");
                        alert("Guardado");
                    }
                );
        }

    }
</script>
