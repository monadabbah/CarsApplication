<template>
<v-app>
<v-container>
   <v-data-table loading="true"
    :headers="headers"
    :items="dealerships"
  >
    <template v-slot:top>
      <v-toolbar
        flat
      >
        <v-toolbar-title>Car Dealerships</v-toolbar-title>
        <v-divider
          class="mx-4"
          inset
          vertical
        ></v-divider>
        <v-spacer></v-spacer>
        <v-dialog
          v-model="dialog"
          max-width="500px"
        >
          <template v-slot:activator="{ on, attrs }">
            <v-btn
              color="primary"
              dark
              class="mb-2"
              v-bind="attrs"
              v-on="on"
            >
              New Dealership
            </v-btn>
          </template>
          <v-card>
            <v-card-title>
              <span class="text-h5">{{ formTitle }}</span>
            </v-card-title>

            <v-card-text>
              <v-container>
                <v-row>
                  <v-col
                    cols="12"
                    sm="12"
                    md="12"
                  >
                    <v-text-field
                      v-model="editedItem.name"
                      label="Dealership Name"
                    ></v-text-field>
                  </v-col>
                  
                </v-row>
              </v-container>
            </v-card-text>

            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn
                color="blue darken-1"
                text
                @click="close"
              >
                Cancel
              </v-btn>
              <v-btn
                color="blue darken-1"
                text
                @click="save"
              >
                Save
              </v-btn>
            </v-card-actions>
          </v-card>
        </v-dialog>
        <v-dialog v-model="dialogDelete" max-width="500px">
          <v-card>
            <v-card-title class="text-h5">Are you sure you want to delete this dealership?</v-card-title>
            <v-card-actions>
              <v-spacer></v-spacer>
              <v-btn color="blue darken-1" text @click="closeDelete">Cancel</v-btn>
              <v-btn color="blue darken-1" text @click="deleteItemConfirm">OK</v-btn>
              <v-spacer></v-spacer>
            </v-card-actions>
          </v-card>
        </v-dialog>
      </v-toolbar>
    </template>
    <template v-slot:[`item.actions`]="{ item }">
      <v-icon
        small
        class="mr-2"
        @click="editItem(item)"
      >
        mdi-pencil
      </v-icon>
      <v-icon
        small
        @click="deleteItem(item)"
      >
        mdi-delete
      </v-icon>
    </template>
  </v-data-table>
</v-container>
</v-app>
</template>
<script>
  export default {
    data () {
      return {
        dialog: false,
        dialogDelete: false,
        headers: [
          {
            text: 'Name',
            align: 'start',
            sortable: true,
            value: 'name',
          },
          {
              text: 'City',
              sortable: true,
              value: 'city',
          },
          {
              text: 'Country',
              sortable: true,
              value: 'Country',
          },
          { text: 'Actions', value: 'actions', sortable: false },
        ],
        dealerships: [],
        editedIndex: -1,
        editedItem: {
            name: '',
            city: '',
            country: ''
        },
        defaultItem: {
            name: '',
            city: '',
            country: ''
        },
      }
    },
    computed: {
      formTitle () {
        return this.editedIndex === -1 ? 'New Dealership' : 'Edit Dealership'
      },
    },

    watch: {
      dialog (val) {
        val || this.close()
      },
      dialogDelete (val) {
        val || this.closeDelete()
      },
    },


    methods: {
      initialize () { 
          axios.get('/api/dealerships').then((res) => {
              console.log("dealerships")
            this.dealerships = res.data;
          })
      },

      editItem (item) {
        this.editedIndex = this.dealerships.indexOf(item)
        this.editedItem = Object.assign({}, item)
        this.dialog = true
      },

      deleteItem (item) {
        this.editedIndex = this.dealerships.indexOf(item)
        this.editedItem = Object.assign({}, item)
        this.dialogDelete = true
      },

      deleteItemConfirm () {
        this.dealerships.splice(this.editedIndex, 1)
        let token = localStorage.getItem('token');
        if (token) {
            axios.delete(`api/dealerships/${this.editedItem.id}`).then(() => {}) 
        }
        this.closeDelete()
      },

      close () {
        this.dialog = false
        this.$nextTick(() => {
          this.editedItem = Object.assign({}, this.defaultItem)
          this.editedIndex = -1
        })
      },

      closeDelete () {
        this.dialogDelete = false
        this.$nextTick(() => {
          this.editedItem = Object.assign({}, this.defaultItem)
          this.editedIndex = -1
        })
      },

      save () {
        if (this.editedIndex > -1) {
          Object.assign(this.dealerships[this.editedIndex], this.editedItem)
          let token = localStorage.getItem('token');
          if (token) {
            axios.put(`api/dealerships/${this.editedItem.id}`, this.editedItem).then((res) => {
              
            }) 
          }
        } else {
          this.dealerships.push(this.editedItem)
          let token = localStorage.getItem('token');
          if (token) {
            axios.post(`api/dealerships`, this.editedItem).then((res) => {
              
            }) 
          }
        }
        this.close()
      },
    },

    mounted() {
      this.initialize()
    }
  }
</script>