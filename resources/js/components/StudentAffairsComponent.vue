<template>
  <div class="container">
    <h3 class="text-center">Student Affairs Department</h3>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Student Name</th>
          <!-- <th scope="col">Student Email</th> -->
          <th scope="col">Reg Number</th>
          <th scope="col">Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="student,key in students">
          <td class="bizname">{{student.name}}</td>
          <!-- <td>{{student.email}}</td> -->
          <td>{{student.reg_no}}</td>
          <td v-if="student.staffairscleared==1">cleared</td>
          <td v-else>Uncleared</td>
          <td><a type="button" id="show-modal" @click="showModal=true;
            setVal(student.id, student.reg_no, student.name, student.staffairscleared)"
            class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editstudent">Edit
          </a></td>
          </tr>
      </tbody>
    </table>
    <div v-if="showModal">
      <div class="modal fade" id="editstudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"><a href="#">Edit Student Records</a></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form v-on:submit.prevent>
                <div class="" slot="body">
                  <h6 class="text-bold mt-2 dark">Student Name</h6>
                  <input type="text" name="" class="form-control mt-1" :value="this.name" id="name">
                  <h6 class="text-bold mt-2 dark">Student Registration Number</h6>
                  <input type="text" name="" class="form-control" :value="this.reg_no" id="reg_no">
                  <h6 class="text-bold mt-2 dark">Set Status (0 for Uncleared and 1 Cleared)</h6>
                  <input type="text" name="" class="form-control" :value="this.status" id="status">

                  <input type="hidden" name="" class="form-control" :value="this.id" id="id">
                  <button v-on:click.prevent @click="showModal=false"
                  data-dismiss="modal" class="mt-1 btn btn-outline-danger btn-sm" >Cancel</button>
                  <button v-on:click.prevent class="mt-1 btn btn-outline-success btn-sm"
                   data-dismiss="modal" @click="updateStudent()">Update</button>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav>
    <ul class="pagination">
      <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
      <a href="#" class="page-link" @click="getStudents(pagination.prev_page_url)"> Prev</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link text-dark" href="#">
        Page {{pagination.current_page}} of {{pagination.last_page}}
        </a>
      </li>
      <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
      <a href="#" class="page-link" @click="getStudents(pagination.next_page_url)"> next</a>
      </li>
    </ul>
    </nav>
  </div>
</template>

<script>
export default {
  data(){
    return{
      students:[],
      id:"",
      reg_no:"",
      name:"",
      status:"",
      student:{
        name:'',
        age:'',
        dept:'',
      },
      showModal:false,
      pagination:{

      }
    }
  },
  mounted(){
    this.getStudents()
  },
  methods:{
    getStudents(url){
      url = url||"api/students"
    let vm = this;
      fetch(url).then(response=>response.json())
      .then(response=>{
        this.students=response.data
        // console.log("Successfully fetched")
        vm.makePagination(response.meta, response.links);
      })
      .catch(err => console.log(err));
    },
     makePagination(meta, links){
        let pagination = {
        current_page :meta.current_page,
        last_page: meta.last_page,
        next_page: meta.next_page,
        next_page_url: links.next,
        prev_page_url: links.prev
        };
        this.pagination = pagination;
      },
      setVal(id, reg_no, name, status){
        this.id=id
        this.reg_no= reg_no
        this.name=name
        this.status= status
      },
      updateStudent(){
        var id = document.getElementById('id').value
        var reg_no= document.getElementById('reg_no').value
        var name = document.getElementById('name').value
        var saffairscleared = document.getElementById('status').value
        axios.put(`api/updatesaffairsstatus/${id}`,
          {
            reg_no:reg_no,
            name:name,
            saffairscleared:saffairscleared
          })
          .then(
            res =>{
              this.getStudents()
            }
          )
      }
  }
}
</script>

<style lang="css" scoped>
.dark{
  font-weight: bold;
}

</style>
