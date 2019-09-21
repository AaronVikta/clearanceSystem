<template>
 <div class="container">
   <div class="row">

     <div class="col-md-10 offset-md-1 mt-4">
       <p class="text-center"> Dear {{user.name}} this is your current status</p>
       <div class="progress mb-3">
     <span class="progress-bar" role="progressbar" style="width:this.average%; background:green"
      aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">{{average}}</span>
   </div>
   <h4 class="text-center mt-4">Status in Details</h4>
    <p>Alumni Clearance <span v-if="user.alumnicleared==0" class="text-danger">Uncleared</span> <span
      class="text-success" v-else>Cleared</span> </p>
    <p>Audit Clearance <span v-if="user.bursarycleared==0" class="text-danger">Uncleared</span> <span
      class="text-success" v-else>Cleared</span> </p>
    <p>Security Clearance <span v-if="user.securitycleared==0" class="text-danger">Uncleared</span> <span
      class="text-success" v-else>Cleared</span> </p>
    <p>Student Affairs Clearance <span v-if="user.staffairscleared==0" class="text-danger">Uncleared</span> <span
      class="text-success" v-else>Cleared</span> </p>
    <p>Library Clearance <span v-if="user.librarycleared==0" class="text-danger">Uncleared</span> <span
      class="text-success" v-else>Cleared</span> </p>
    <p>Faculty Clearance <span v-if="user.facultycleared==0" class="text-danger">Uncleared</span> <span
      class="text-success" v-else>Cleared</span> </p>
      <div class="">
        <h4 class="text-center text-danger">Notice</h4>
        <p class="text-center text-danger">Please go to the respective ofice where you have issues and
        rectify them </p>
      </div>
     </div>

   </div>
 </div>
</template>

<script>
export default {
  data(){
    return{
      user:{
      },
      a:0,
      b:0,
      c:0,
      d:0,
      e:0,
      f:0,
      sum:0,
      average:0

    }
  },
  mounted(){
    console.log(this.$userId),
    this.getMyDetails()
  },
  methods:{
    getMyDetails(){
      let id= this.$userId;
      axios.get(`api/student/${id}`)
      .then( res=> res
      )
      .then(res=>{
        console.log(res.data);
        this.user= res.data
        // console.log(this.user.alumnicleared)
      this.a =this.user.alumnicleared
      this.b= this.user.bursarycleared
      this.c=this.user.facultycleared
      this.d=this.user.librarycleared
      this.e=this.user.securitycleared
      this.f= this.user.staffairscleared
      this.sum = (this.a+this.b+this.c+this.d+this.e+this.f)
      this.average= (this.sum)/6
      this.average =(this.average*100);
      })
    }
  }
}
</script>

<style lang="css" scoped>
</style>
