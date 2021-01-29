<template>
    <div class="p-0">
        <div class="card">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                    <i class="fas fa-users mr-1"></i>
                    Utilisateurs
                </h3>
                <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                        <li class="nav-item mr-1">
                            <button class="btn btn-sm btn-primary" @click="createMode"><i class="fas fa-plus-circle"></i> Ajouter Nouveau</button>
                        </li>
                        <li class="nav-item">
                            <div class="input-group mt-0 input-group-sm" style="width: 350px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search by name, email">

                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Role</th>
                        <th>Email</th>
                        <th>Etat</th>
                        <th>Action</th>
                        <th>Date </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users" :key="user.id">
                            <td>{{ user.id }}</td>
                            <td> {{ user.name }}</td>
                            <td>{{ user.role }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.actif }}</td>
                            <td>
                                <button class="btn btn-sm btn-info" @click="viewUser(user)"> <i class="fa fa-eye"></i> View</button>
                                <button class="btn btn-sm btn-warning" @click="editUser(user)" > <i class="fa fa-edit"></i> Edit</button>
                                <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> Delete </button>
                            </td>
                            <td>
                                {{ user.created_at | date }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <loading :loading="loading"></loading>
        </div>

        <div class="modal fade" id="viewUser" tabindex="-1" role="dialog" aria-labelledby="viewUserModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <p><b>Nom:</b> {{ user.name }}</p>
                                <p><b>Email:</b> {{ user.email }}</p>
                                <p><b>Etat:</b> {{ user.actif }}</p>
                                <p><b>Dernière Mis a Jour:</b> {{ user.updated_at | date }}</p>
                                <p><b>Date Creation:</b> {{ user.created_at | date }}</p>
                            </div>

                            <div class="col-md-6">
                                <img :src="img" class="img-circle">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="createUserModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createUserModalLabel" v-show="!editMode">Ajouter un Utilisateur</h5>
                        <h5 class="modal-title" id="createUserModalLabel" v-show="editMode">Editer un Utilisateur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form @submit.prevent="!editMode ? createUser() : updateUser()">
                        <div class="modal-body">
                            <div class="form-group">
                                <label> Nom </label>
                                <input v-model="form.name" type="text" name="name" placeholder="Nom"
                                    class="form-control" :class="{'is-invaild': form.errors.has('name')}">
                                <has-error :form="form" field="name"></has-error>
                            </div>

                            <div class="form-group">
                                <label> Email </label>
                                <input v-model="form.email" type="text" name="email" placeholder="Email"
                                    class="form-control" :class="{'is-invaild': form.errors.has('email')}">
                                <has-error :form="form" field="email"></has-error>
                            </div>

                            <div class="form-group">
                                <label> Phone Number </label>
                                <input v-model="form.numero" type="text" name="numero" placeholder="Phone Number"
                                    class="form-control" :class="{'is-invaild': form.errors.has('numero')}">
                                <has-error :form="form" field="numero"></has-error>
                            </div>

                            <div class="form-group form-check">
                                <input v-model="form.actif"  name="actif" type="checkbox" class="form-check-input" id="exampleCheck1" >
                                <label class="form-check-label" for="exampleCheck1">Cocher pour activr l'utilisateur.</label>
                            </div>

                            <div class="form-group">
                                <label> Choose Role </label>
                                <b-form-select
                                    v-model="form.role"
                                    :options="roles"
                                    text-field="name"
                                    value-field="id"

                                ></b-form-select>
                                <has-error :form="form" field="role"></has-error>

                            </div>

                            <div class="form-group">
                                <label> Password </label>
                                <input v-model="form.password" type="password" name="password" placeholder="Password"
                                    class="form-control" :class="{'is-invaild': form.errors.has('password')}">
                                <has-error :form="form" field="password"></has-error>
                            </div>

                            <b-form-group label="Assign Permissions">
                                <b-form-checkbox
                                    v-for="option in permissions"
                                    v-model="form.permissions"
                                    :key="option.name"
                                    :value="option.name"
                                    name="flavour-3a"
                                >
                                    {{ option.name }}
                                </b-form-checkbox>
                            </b-form-group>

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button"  class="btn btn-lg btn-danger" data-dismiss="modal">Close</button>
                            <b-button variant="primary" v-if="!load" class="btn-lg" disabled>
                                <b-spinner small type="grow"></b-spinner>
                                {{  action }}
                            </b-button>
                            <button type="submit" v-if="load" v-show="!editMode" class="btn btn-lg btn-primary">Save User</button>
                            <button type="submit" v-if="load" v-show="editMode" class="btn btn-lg btn-success">Update User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            action: '',
            loading: false,
            editMode: false,
            load: true,
            img: 'http://localhost:8000/img/avatar.jpg',
            user: {},
            users: [],
            roles: [],
            permissions:[],
            form: new Form({
                'id' : '',
                'name': '',
                'numero': '',
                'password': '',
                'actif': '',
                'email': '',
                'permissions': [],
                'role': 3,
            })
        }
    },
    methods:{
        createMode(){
            this.editMode = false;
            $('#createUser').modal('show');
        },

        editUser(user){
            this.editMode = true;
            this.form.reset();
            this.form.fill(user);
            this.form.role = user.roles[0].id;
            this.form.permissions = user.userPermissions
            $('#createUser').modal('show');

        },
        getUsers(){

            this.loading = true;
            axios.get('/getAllUsers').then((response) =>{
                this.loading = false;
                this.users = response.data.users
            }).catch(()=>{
                this.loading = false;
                this.$toastr.e("Erreur chagement utilisateur", "Error");
            })
        },
        viewUser(user){
            $('#viewUser').modal('show');
            this.img = 'http://localhost:8000/img/'+user.photo;
            this.user = user;
        },
        getRoles(){
            axios.get('/getAllRoles').then((response) =>{
                this.roles = response.data.roles
            });
        },
        getPermissions(){
            axios.get('/getAllPermissions').then((response) =>{
                this.permissions = response.data.permissions
            });
        },

        createUser(){
            this.action = 'Creation Utilisateur...'
            this.load = false;
            this.form.post("/compte/create").then((response) => {
                this.load = true;
                this.$toastr.s("l'utilisateur a été crée avec succès", "Created");
                Fire.$emit("loadUser");
                $("#createUser").modal("hide");
                this.form.reset();
            }).catch(() => {
                this.load = true;
                this.$toastr.e("Nous ne pouvons pas creer l'utilisateur veuillez réessayer", "Error");
            });
        },

        updateUser(){
            this.action = 'Mise a jour...'
            this.load = false;
            this.form.put("/compte/update/" +this.form.id).then((response) => {
                this.load = true;
                this.$toastr.s("Information Utilisateur mise a jour avec succès", "Created");
                Fire.$emit("loadUser");
                $("#createUser").modal("hide");
                this.form.reset();
            }).catch(() => {
                this.load = true;
                this.$toastr.e("Nous ne pouvons pas mettre à jour les information de l'utilisateur, veuillez réessayer", "Error");
            });
        },


    },
    created(){
        this.getUsers();
        this.getRoles();
        this.getPermissions();
        Fire.$on('loadUser', () => {
            this.getUsers();
        });
    }
}
</script>
