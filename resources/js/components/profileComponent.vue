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
      <div class="col-md-4 offset-md-4">
        <h4 class="text-center">Generate Remita</h4>
        <div class="row">
          <span class="">
            <a href="#" type="button" id="show-modal"
            data-toggle="modal" data-target="#generate"
            @click="showModal=true; setAR()"
            class="btn btn-info mr-1 form-control">
            Get Alumni RRR
          </a>

        </span>
        <span class="">
          <a href="#" type="button" id="show-modal"
          data-toggle="modal" data-target="#genconvoc"
          @click="showConvoc=true; setCR()"
          class="btn btn-info ml-3">
          Get Convocation RRR
        </a>
      </span>
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
                    <input disabled type="text" name="" class="form-control" :value="rrr"  id="">
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
                    <input type="text" disabled name="" class="form-control" :value="crrr"  id="">
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
      crrr:"",
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
    this.getGeneratedRRR(),
    this.getConvocationRRR()
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
     if(this.rrr){
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
   setCR(){
     let id = this.$userId;
    if(this.crrr){
      console.log('Exists Already');
    }
    else{
      let Crrr=  Math.random().toString(36).replace('0.', '')
      this.crrr=Crrr
      axios.post(`api/convocrrr/${id}`,{
       crrr :this.crrr
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
       this.rrr=res['RRR']
     })
   },
   getConvocationRRR(Crl){
     let id= this.$userId;
     Crl =Crl||`api/crrr/${id}`
     fetch(Crl)
     .then(res=>res.json())
     .then(res=>{
       this.crrr=res['RRR']
     })
   }
  }
}
</script>

<style lang="css" scoped>
.dark{
  font-weight: bold;
}
.temp{
  text-align: center;
  margin-top: 3px;
}
</style>
