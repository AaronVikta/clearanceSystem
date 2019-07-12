<template>

  <div class="container">
    <div class="row">
      <div class="">
        <p>{{student.name}}</p>
        <p>{{student.email}}</p>

      </div>
    </div>
    <h4 class="text-center">Take Actions</h4>
    <div class="row">
      <div class="col-md-3 card">
        <a href="#" type="" id="show-modal"
        data-toggle="modal" data-target="#generate"
         @click="showModal=true"
          class="">
          Generate Alumni RRR
        </a>

      </div>
      <div class="col-md-3 card">
        <a href="#">Pay Alumni Fee</a>
      </div>
      <div class="col-md-3 card">
        <a href="#" type="" id="show-modal"
        data-toggle="modal" data-target="#genconvoc"
         @click="showConvoc=true"
          class="">
          Generate Convocation RRR
        </a>
      </div>
      <div class="col-md-3 card">
        <a href="#">Pay Convocation Fee</a>
      </div>
      <div v-if="showModal">
        <div class="modal fade" id="generate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><a href="#">Your RRR</a></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form v-on:submit.prevent>
                  <div class="" slot="header">
                    <input type="text" name="" class="form-control"  id="room_type">
                    <input type="hidden" name="" class="form-control" id="id">
                    <a type="button" v-on:click.prevent @click="showModal=false"
                    data-dismiss="modal" class="mt-1 btn btn-outline-danger btn-sm" >Cancel</a>
                    <a type="button" v-on:click.prevent class="mt-1 btn btn-outline-success
                    btn-sm" @click="" data-dismiss="modal">Print</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div v-if="showConvoc">
        <div class="modal fade" id="genconvoc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><a href="#">Convocation RRR</a></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form v-on:submit.prevent>
                  <div class="" slot="header">
                    <input type="text" name="" class="form-control"  id="room_type">
                    <input type="hidden" name="" class="form-control" id="id">
                    <a type="button" v-on:click.prevent @click="showModal=false"
                    data-dismiss="modal" class="mt-1 btn btn-outline-danger btn-sm" >Cancel</a>
                    <a type="button" v-on:click.prevent class="mt-1 btn btn-outline-success
                    btn-sm" @click="" data-dismiss="modal">Print</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      showModal:'',
      showConvoc:"",
      student:{

      }
    }
  },
  mounted(){
    console.log(this.$userId),
    this.getStudentDetail()
  },
  methods:{
    getStudentDetail(url){
      var id =this.$userId
      url =url||`api/student/${id}`
      fetch(url)
      .then(res=>res.json())
      .then(res=>{
        this.student = res
      })
    }
  }
}
</script>

<style lang="css" scoped>
</style>
