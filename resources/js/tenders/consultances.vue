
<template>
  <div class="container">
    <h1 class="h3 mt-5 mb-2">Add Project</h1>
    <div class="row mt-4">
      <div class="col-md-7">
        <div class="card">
          <div class="card-body">
            <form @submit.prevent="formSubmit" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Title</label>
                <input
                  class="form-control"
                  v-model="tenders.title"
                  :class="[{'is-invalid': errorFor('title')}]"
                />
                <div
                  class="invalid-feedback"
                  v-for="(error, index) in this.errorFor('title')"
                  :key="'title' + index"
                >{{ error }}</div>
              </div>

              <p class="font-weight-bold">Choose Your Villa Type.</p>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="flexRadioDefault1"
                  value="classic"
                  v-model="tenders.villa"
                />
                <label class="form-check-label" for="flexRadioDefault">Classic</label>
              </div>
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="flexRadioDefault2"
                  value="modern"
                  v-model="tenders.villa"
                />
                <label class="form-check-label" for="flexRadioDefault">modern</label>
              </div>

              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="flexRadioDefault2"
                  value="modern_classic"
                  v-model="tenders.villa"
                />
                <label class="form-check-label" for="flexRadioDefault">Modern Classic</label>
              </div>
              <div class="container">
                <hr />
              </div>

              <!-- ---------End Type Villa-------------------------------------!-->
              <div class="Floors">
                <p class="font-weight-bold">Floors</p>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault2"
                    id="flexRadioDefault2"
                    value="1"
                    v-model="tenders.floor"
                  />
                  <label class="form-check-label" for="flexRadioDefault2">Ground With 1 Floors</label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault2"
                    id="flexRadioDefault2"
                    value="2"
                    v-model="tenders.floor"
                  />
                  <label class="form-check-label" for="flexRadioDefault2">Ground With 2 Floors</label>
                </div>
              </div>

              <div class="container">
                <hr />
              </div>

              <!-- ---------End Type floors-------------------------------------!-->

              <div class="rooms">
                <div class="row">
                  <div class="col-6">
                    <label for="customRange3">Room Mastar</label>
                    <input
                      type="number"
                      class="form-control"
                      v-model="tenders.mastar_room"
                      :class="[{'is-invalid': errorFor('mastar_room')}]"
                    />
                    <div
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('mastar_room')"
                      :key="'mastar_room' + index"
                    >{{ error }}</div>
                  </div>

                  <div class="col-6">
                    <label for="customRange3">Bed Rooms</label>
                    <input
                      type="number"
                      class="form-control"
                      v-model="tenders.bedroom"
                      :class="[{'is-invalid': errorFor('bedroom')}]"
                    />
                    <div
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('bedroom')"
                      :key="'bedroom' + index"
                    >{{ error }}</div>
                  </div>
                </div>
                <div class="container">
                  <hr />
                </div>
                <div class="row">
                  <div class="col-4">
                    <label for="customRange3">Living Rooms</label>
                    <input
                      type="number"
                      class="form-control"
                      v-model="tenders.living_room"
                      :class="[{'is-invalid': errorFor('living_room')}]"
                    />
                    <div
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('living_room')"
                      :key="'living_room' + index"
                    >{{ error }}</div>
                  </div>

                  <div class="col-4">
                    <label for="customRange3">majlis</label>
                    <input
                      type="number"
                      class="form-control"
                      v-model="tenders.majlis"
                      :class="[{'is-invalid': errorFor('majlis')}]"
                    />
                    <div
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('majlis')"
                      :key="'majlis' + index"
                    >{{ error }}</div>
                  </div>
                  <div class="col-4">
                    <label for="customRange3">kitchens</label>
                    <input
                      type="number"
                      class="form-control"
                      v-model="tenders.kitchens"
                      :class="[{'is-invalid': errorFor('kitchens')}]"
                    />
                    <div
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('kitchens')"
                      :key="'kitchens' + index"
                    >{{ error }}</div>
                  </div>
                </div>
                <div class="container">
                  <hr />
                </div>
                <div class="row">
                  <div class="col-6">
                    <label for="customRange3">dining rooms</label>
                    <input
                      type="number"
                      class="form-control"
                      v-model="tenders.dining_room"
                      :class="[{'is-invalid': errorFor('dining_room')}]"
                    />
                    <div
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('dining_room')"
                      :key="'dining_room' + index"
                    >{{ error }}</div>
                  </div>
                  <div class="col-6">
                    <label for="customRange3">bathroom</label>
                    <input
                      type="number"
                      class="form-control"
                      v-model="tenders.bathroom"
                      :class="[{'is-invalid': errorFor('bathroom')}]"
                    />
                    <div
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('bathroom')"
                      :key="'bathroom' + index"
                    >{{ error }}</div>
                  </div>
                </div>
                <div class="container">
                  <hr />
                </div>

                <p class="font-weight-bold">Service room placement</p>
                <div class="form-check">
                  <label class="form-check-label" for="flexRadioDefault3">
                    <input
                      class="form-check-input"
                      type="radio"
                      name="flexRadioDefault3"
                      id="flexRadioDefault3 "
                      value="inside"
                      v-model="tenders.position"
                    />
                    inside villa
                    <sub>
                      <i class="text-muted">MAID ROOM + MAIN KITCHEN + STORE</i>
                    </sub>
                  </label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="radio"
                    name="flexRadioDefault3"
                    id="flexRadioDefault3"
                    value="outside"
                    v-model="tenders.position"
                  />
                  <label class="form-check-label" for="flexRadioDefault3">Outside villa</label>
                  <div
                    class="invalid-feedback"
                    v-for="(error, index) in this.errorFor('position')"
                    :key="'position' + index"
                  >{{ error }}</div>
                </div>

                <!--<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault3" id="flexRadioDefault3" value="both" v-model="tenders.position">
  <label class="form-check-label" for="flexRadioDefault3">
    Both
  </label>
</div>
                -->

                <div class="container">
                  <hr />
                </div>

                <div class="budget">
                  <p>budget</p>
                  <div class="row">
                    <div class="col-4">
                      <div class="input-group mb-2">
                        <label class="sr-only" for="inlineFormInputGroup">Min</label>

                        <input
                          type="number"
                          class="form-control"
                          id="inlineFormInputGroup"
                          placeholder="0.00 "
                          v-model="tenders.min"
                          :class="[{'is-invalid': errorFor('min')}]"
                        />
                        <div class="input-group-prepend">
                          <div class="input-group-text">AED</div>
                        </div>
                        <div
                          class="invalid-feedback"
                          v-for="(error, index) in this.errorFor('min')"
                          :key="'min' + index"
                        >{{ error }}</div>
                      </div>
                    </div>
                    <div class="col-4">
                      <label class="sr-only" for="inlineFormInputGroup">MAX</label>
                      <div class="input-group mb-2">
                        <input
                          type="text"
                          class="form-control"
                          id="inlineFormInputGroup"
                          placeholder="0.00 "
                          v-model="tenders.max"
                          :class="[{'is-invalid': errorFor('max')}]"
                        />

                        <div class="input-group-prepend">
                          <div class="input-group-text">AED</div>
                        </div>
                        <div
                          class="invalid-feedback"
                          v-for="(error, index) in this.errorFor('max')"
                          :key="'max' + index"
                        >{{ error }}</div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="container">
                  <hr />
                </div>

                <div class="form-group mt-3">
                  <label for="date">emirates</label>
                  <select
                    class="form-control"
                    v-model="tenders.emirates"
                    :class="[{'is-invalid': errorFor('emirates')}]"
                  >
                    <div
                      class="invalid-feedback"
                      v-for="(error, index) in this.errorFor('emirates')"
                      :key="'emirates' + index"
                    >{{ error }}</div>
                    <option value="2">Duabi</option>
                    <option value="2">Fujira</option>
                    <option value="3">Ras Alkhima</option>
                    <option value="4">um alqwain</option>
                    <option value="5">sharja</option>
                    <option value="6">ajman</option>
                    <option value="7">Abudabhi</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Notes :</label>
                  <textarea
                    class="form-control"
                    id="exampleFormControlTextarea1"
                    rows="4"
                    v-model="tenders.Notes"
                    :class="[{'is-invalid': errorFor('Notes')}]"
                  ></textarea>
                  <div
                    class="invalid-feedback"
                    v-for="(error, index) in this.errorFor('Notes')"
                    :key="'Notes' + index"
                  >{{ error }}</div>
                </div>

                <div class="form-group container">
                  <label>files</label>
                  <input type="file" class="form-control mb-3" multiple />
                </div>

                <div class="row">
                  <div class="col-4">
                    <button class="btn btn-primary btn-block mt-3 font-weight-bold">POST NOW</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-5">
        <conditions></conditions>
      </div>
    </div>
  </div>
</template>

<script>
import conditions from "./conditions.vue";
import ValidationErrors from "../shared/components/ValidationErrors.vue";
import validationErrors from "../shared/mixins/validationErrors";

export default {
  components: { conditions, ValidationErrors },
  mixins: [validationErrors],

  data() {
    return {
      tenders: {
        villa: null,
        floor: null,
        position: null,
        mastar_room: null,
        bedroom: null,
        living_room: null,
        majlis: null,
        kitchens: null,
        dining_room: null,
        bathroom: null,
        both: null,
        min: null,
        max: null,
        emirates: null,
        Notes: null,
        title: null,
      },
      files: [],
      success: "",
      errors: null,
      status: null,
    };
  },

  methods: {
    onChange(e) {
      this.file = e.target.files[0];
    },
    formSubmit() {
      this.errors = null;

      //data.append('imageAds', this.photo);

      let data = new FormData();
      this.files.forEach((file) => {
        data.append("images[]", file, file.name);
      });

      /*
        this.files.forEach(file =>{
            data.append('images[]',file,file.name)
        })
        */

      data.append("villa_type", this.tenders.villa);
      data.append("floor", this.tenders.floor);
      data.append("position", this.tenders.position);

      data.append("mastar_room", this.tenders.mastar_room);
      data.append("bedroom", this.tenders.bedroom);
      data.append("living_room", this.tenders.living_room);
      data.append("majlis", this.tenders.majlis);
      data.append("kitchens", this.tenders.kitchens);
      data.append("bathroom", this.tenders.bathroom);
      data.append("dining_room", this.tenders.dining_room);
      data.append("min", this.tenders.min);
      data.append("max", this.tenders.max);
      data.append("emirates", this.tenders.emirates);
      data.append("title", this.tenders.title);
      data.append("Notes", this.tenders.Notes);

      axios
        .post(`/tenders`, data)
        .then(response=>{
          this.status = response.data;
          let id = this.status;

          this.$router.push({ name: "ConslTender", params: { id } });
          // localStorage.setItem('messageTender',JSON.stringify(this.message));
        })
        .catch(error=>{
            if(422===error.response.status){
                // console.log(error.response.data.errors);
                this.errors=error.response.data.errors
            }
            this.status=error.response.status

        })
        .then(() => ((this.loading = false), (this.ret = false)));
    },
    errorFor(field) {
      return this.hasErrors && this.errors[field] ? this.errors[field] : null;
    },
  },
  computed: {
    hasErrors() {
      return 422 === this.status && this.errors !== null;
    },
  },
};
</script>
