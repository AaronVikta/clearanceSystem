<template>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <h5 class="text-center dark">STUDENT PERSONAL INFORMATION</h5>
          <div class="row">
            <div class="col-md-12">
              <span>Name: {{student.name}} </span>
                <span class="float-right"> <img src="" alt="profile picture"></span><br>
              Department: {{student.dept}}<br>
              Email: {{student.email}} <br>
              Registration Number: {{student.reg_no}} <br>
              Phone: {{student.phone}} <br>

              <span class="float-right">
                <a href="#" type="button" class="btn btn-success btn-sm float-right"
                data-toggle="modal" data-target="#editprofile"
                 @click="editProfile=true">Update Profile</a>
              </span>
            </div>

          </div>
        <hr style="color:#000">
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 offset-md-1">
        <h4 class="text-center">Take Actions</h4>
        <div class="row">
          <div class="col-md-3 card">
            <a href="#" type="" id="show-modal"
            data-toggle="modal" data-target="#generate"
            @click="showModal=true; setAR()"
            class="">
            Generate Alumni RRR
          </a>

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
                <h5 class="modal-title" id="exampleModalLongTitle"><a href="#">Your Alumni RRR</a></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form v-on:submit.prevent>
                  <div class="" slot="header">
                    <input disabled type="text" name="" class="form-control" :value="rrr"  id="room_type">
                    <input type="hidden" name="" class="form-control" id="id">
                    <a type="button" v-on:click.prevent @click="showModal=false"
                    data-dismiss="modal" class="mt-1 btn btn-outline-danger btn-sm" >Done</a>
                    <a type="button" v-on:click.prevent class="mt-1 btn btn-outline-success
                    btn-sm" @click="" data-dismiss="modal">Print</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div v-if="editProfile">
        <div class="modal fade" id="editprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><a href="#">Your profile</a></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form v-on:submit.prevent>
                  <div class="" slot="header">
                    <input type="text" name="" class="form-control" id="">
                    <input type="hidden" name="" class="form-control" id="id">
                    <a type="button" v-on:click.prevent @click="editProfile=false"
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
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{
      showModal:'',
      rrr:"",
      generatedrrr:"",
      showConvoc:"",
      editProfile:"",
      student:{

      }
    }
  },
  mounted(){
    console.log(this.$userId),
    this.getStudentDetail(),
    this.getGeneratedRRR()
  },
  methods:{
    getStudentDetail(url){
      let id =this.$userId
      url =url||`api/student/${id}`
      fetch(url)
      .then(res=>res.json())
      .then(res=>{
        this.student = res
      })
    },
    setAR(){
      let id = this.$userId;
     if(this.rrr != null){
       console.log('Exists Already');
     }
     else{
       let Arrr=  Math.random().toString(36).replace('0.', '')
       this.rrr=Arrr
       axios.post(`api/alumnirrr/${id}`,{
        rrr :this.rrr
       })
       .then(res=>{
         console.log(res.data);
       })
       .catch(err =>{
         console.log(err);
       })
     }
   },
   getGeneratedRRR(Aurl){
     let id =this.$userId;
     Aurl= Aurl||`api/myrrr/${id}`
     fetch(Aurl)
     .then(res=>res.json())
     .then(res=>{
       this.rrr =res['RRR']
     })
   }
  }
}
</script>

<style lang="css" scoped>
.dark{
  font-weight: bold;
}
</style>
