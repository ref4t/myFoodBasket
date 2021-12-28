<template>
  <admin-layout>
    <template v-slot:header>
        <h1 class="m-0 text-capitalize">Settings</h1>
    </template>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form @submit.prevent="updateSettings(dataForm)">
              <div class="card">
                    <div class="card-header">
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <button type="submit" class="btn btn-success rounded-pill m-2" > SAVE </button>
                            <Link :href="route('admin.dashboard')" as="button" type="submit" class="btn btn-danger rounded-pill m-2" > CANCEL </Link>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table" >
                            <tbody>
                                <tr>
                                    <th colspan="2" style="color: #FF802B;" >BUSSINESS HOURS</th>
                                </tr>
                                <tr v-for="(val,index) in dataForm.bussines.day" :key="index">
                                    <td style="width: 600px">
                                        <Multiselect
                                        v-model="dataForm.bussines.day[index]"
                                        mode="tags"
                                        :close-on-select="false"
                                        :searchable="true"
                                        :create-option="true"
                                        :options="[
                                            { value: 0, label: 'Every Day' },
                                            { value: 2, label: 'Monday' },
                                            { value: 3, label: 'Tuesday' },
                                            { value: 4, label: 'Wednesday' },
                                            { value: 5, label: 'Thursday' },
                                            { value: 6, label: 'Friday' },
                                            { value: 7, label: 'Saturday' },
                                            { value: 8, label: 'Sunday' },
                                        ]"
                                        />

                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline ">
                                            <label class="form-check-label">From:</label>
                                            <select class="form-control" v-model="dataForm.bussines.from[index]" name="" id=""   >
                                                <option value="00:00">00:00</option>
                                                <option value="0:00">0:00</option>
                                                <option value="0:10">0:10</option>
                                                <option value="0:20">0:20</option>
                                                <option value="0:30">0:30</option>
                                                <option value="0:40">0:40</option>
                                                <option value="0:50">0:50</option>
                                                <option value="1:00">1:00</option>
                                                <option value="1:10">1:10</option>
                                                <option value="1:20">1:20</option>
                                                <option value="1:30">1:30</option>
                                                <option value="1:40">1:40</option>
                                                <option value="1:50">1:50</option>
                                                <option value="2:00">2:00</option>
                                                <option value="2:10">2:10</option>
                                                <option value="2:20">2:20</option>
                                                <option value="2:30">2:30</option>
                                                <option value="2:40">2:40</option>
                                                <option value="2:50">2:50</option>
                                                <option value="3:00">3:00</option>
                                                <option value="3:10">3:10</option>
                                                <option value="3:20">3:20</option>
                                                <option value="3:30">3:30</option>
                                                <option value="3:40">3:40</option>
                                                <option value="3:50">3:50</option>
                                                <option value="4:00">4:00</option>
                                                <option value="4:10">4:10</option>
                                                <option value="4:20">4:20</option>
                                                <option value="4:30">4:30</option>
                                                <option value="4:40">4:40</option>
                                                <option value="4:50">4:50</option>
                                                <option value="5:00">5:00</option>
                                                <option value="5:10">5:10</option>
                                                <option value="5:20">5:20</option>
                                                <option value="5:30">5:30</option>
                                                <option value="5:40">5:40</option>
                                                <option value="5:50">5:50</option>
                                                <option value="6:00">6:00</option>
                                                <option value="6:10">6:10</option>
                                                <option value="6:20">6:20</option>
                                                <option value="6:30">6:30</option>
                                                <option value="6:40">6:40</option>
                                                <option value="6:50">6:50</option>
                                                <option value="7:00">7:00</option>
                                                <option value="7:10">7:10</option>
                                                <option value="7:20">7:20</option>
                                                <option value="7:30">7:30</option>
                                                <option value="7:40">7:40</option>
                                                <option value="7:50">7:50</option>
                                                <option value="8:00">8:00</option>
                                                <option value="8:10">8:10</option>
                                                <option value="8:20">8:20</option>
                                                <option value="8:30">8:30</option>
                                                <option value="8:40">8:40</option>
                                                <option value="8:50">8:50</option>
                                                <option value="9:00">9:00</option>
                                                <option value="9:10">9:10</option>
                                                <option value="9:20">9:20</option>
                                                <option value="9:30">9:30</option>
                                                <option value="9:40">9:40</option>
                                                <option value="9:50">9:50</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:10">10:10</option>
                                                <option value="10:20">10:20</option>
                                                <option value="10:30">10:30</option>
                                                <option value="10:40">10:40</option>
                                                <option value="10:50">10:50</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:10">11:10</option>
                                                <option value="11:20">11:20</option>
                                                <option value="11:30">11:30</option>
                                                <option value="11:40">11:40</option>
                                                <option value="11:50">11:50</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:10">12:10</option>
                                                <option value="12:20">12:20</option>
                                                <option value="12:30">12:30</option>
                                                <option value="12:40">12:40</option>
                                                <option value="12:50">12:50</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:10">13:10</option>
                                                <option value="13:20">13:20</option>
                                                <option value="13:30">13:30</option>
                                                <option value="13:40">13:40</option>
                                                <option value="13:50">13:50</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:10">14:10</option>
                                                <option value="14:20">14:20</option>
                                                <option value="14:30">14:30</option>
                                                <option value="14:40">14:40</option>
                                                <option value="14:50">14:50</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:10">15:10</option>
                                                <option value="15:20">15:20</option>
                                                <option value="15:30">15:30</option>
                                                <option value="15:40">15:40</option>
                                                <option value="15:50">15:50</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:10">16:10</option>
                                                <option value="16:20">16:20</option>
                                                <option value="16:30">16:30</option>
                                                <option value="16:40">16:40</option>
                                                <option value="16:50">16:50</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:10">17:10</option>
                                                <option value="17:20">17:20</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:40">17:40</option>
                                                <option value="17:50">17:50</option>
                                                <option value="18:00">18:00</option>
                                                <option value="18:10">18:10</option>
                                                <option value="18:20">18:20</option>
                                                <option value="18:30">18:30</option>
                                                <option value="18:40">18:40</option>
                                                <option value="18:50">18:50</option>
                                                <option value="19:00">19:00</option>
                                                <option value="19:10">19:10</option>
                                                <option value="19:20">19:20</option>
                                                <option value="19:30">19:30</option>
                                                <option value="19:40">19:40</option>
                                                <option value="19:50">19:50</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:10">20:10</option>
                                                <option value="20:20">20:20</option>
                                                <option value="20:30">20:30</option>
                                                <option value="20:40">20:40</option>
                                                <option value="20:50">20:50</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:10">21:10</option>
                                                <option value="21:20">21:20</option>
                                                <option value="21:30">21:30</option>
                                                <option value="21:40">21:40</option>
                                                <option value="21:50">21:50</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:10">22:10</option>
                                                <option value="22:20">22:20</option>
                                                <option value="22:30">22:30</option>
                                                <option value="22:40">22:40</option>
                                                <option value="22:50">22:50</option>
                                                <option value="23:00">23:00</option>
                                                <option value="23:10">23:10</option>
                                                <option value="23:20">23:20</option>
                                                <option value="23:30">23:30</option>
                                                <option value="23:40">23:40</option>
                                                <option value="23:50">23:50</option>
                                                <option value="23:59">23:59</option>
                                            </select>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <label class="form-check-label">To:</label>
                                             <select class="form-control" v-model="dataForm.bussines.to[index]" name="" id=""   >
                                                <option value="00:00">00:00</option>
                                                <option value="0:00">0:00</option>
                                                <option value="0:10">0:10</option>
                                                <option value="0:20">0:20</option>
                                                <option value="0:30">0:30</option>
                                                <option value="0:40">0:40</option>
                                                <option value="0:50">0:50</option>
                                                <option value="1:00">1:00</option>
                                                <option value="1:10">1:10</option>
                                                <option value="1:20">1:20</option>
                                                <option value="1:30">1:30</option>
                                                <option value="1:40">1:40</option>
                                                <option value="1:50">1:50</option>
                                                <option value="2:00">2:00</option>
                                                <option value="2:10">2:10</option>
                                                <option value="2:20">2:20</option>
                                                <option value="2:30">2:30</option>
                                                <option value="2:40">2:40</option>
                                                <option value="2:50">2:50</option>
                                                <option value="3:00">3:00</option>
                                                <option value="3:10">3:10</option>
                                                <option value="3:20">3:20</option>
                                                <option value="3:30">3:30</option>
                                                <option value="3:40">3:40</option>
                                                <option value="3:50">3:50</option>
                                                <option value="4:00">4:00</option>
                                                <option value="4:10">4:10</option>
                                                <option value="4:20">4:20</option>
                                                <option value="4:30">4:30</option>
                                                <option value="4:40">4:40</option>
                                                <option value="4:50">4:50</option>
                                                <option value="5:00">5:00</option>
                                                <option value="5:10">5:10</option>
                                                <option value="5:20">5:20</option>
                                                <option value="5:30">5:30</option>
                                                <option value="5:40">5:40</option>
                                                <option value="5:50">5:50</option>
                                                <option value="6:00">6:00</option>
                                                <option value="6:10">6:10</option>
                                                <option value="6:20">6:20</option>
                                                <option value="6:30">6:30</option>
                                                <option value="6:40">6:40</option>
                                                <option value="6:50">6:50</option>
                                                <option value="7:00">7:00</option>
                                                <option value="7:10">7:10</option>
                                                <option value="7:20">7:20</option>
                                                <option value="7:30">7:30</option>
                                                <option value="7:40">7:40</option>
                                                <option value="7:50">7:50</option>
                                                <option value="8:00">8:00</option>
                                                <option value="8:10">8:10</option>
                                                <option value="8:20">8:20</option>
                                                <option value="8:30">8:30</option>
                                                <option value="8:40">8:40</option>
                                                <option value="8:50">8:50</option>
                                                <option value="9:00">9:00</option>
                                                <option value="9:10">9:10</option>
                                                <option value="9:20">9:20</option>
                                                <option value="9:30">9:30</option>
                                                <option value="9:40">9:40</option>
                                                <option value="9:50">9:50</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:10">10:10</option>
                                                <option value="10:20">10:20</option>
                                                <option value="10:30">10:30</option>
                                                <option value="10:40">10:40</option>
                                                <option value="10:50">10:50</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:10">11:10</option>
                                                <option value="11:20">11:20</option>
                                                <option value="11:30">11:30</option>
                                                <option value="11:40">11:40</option>
                                                <option value="11:50">11:50</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:10">12:10</option>
                                                <option value="12:20">12:20</option>
                                                <option value="12:30">12:30</option>
                                                <option value="12:40">12:40</option>
                                                <option value="12:50">12:50</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:10">13:10</option>
                                                <option value="13:20">13:20</option>
                                                <option value="13:30">13:30</option>
                                                <option value="13:40">13:40</option>
                                                <option value="13:50">13:50</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:10">14:10</option>
                                                <option value="14:20">14:20</option>
                                                <option value="14:30">14:30</option>
                                                <option value="14:40">14:40</option>
                                                <option value="14:50">14:50</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:10">15:10</option>
                                                <option value="15:20">15:20</option>
                                                <option value="15:30">15:30</option>
                                                <option value="15:40">15:40</option>
                                                <option value="15:50">15:50</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:10">16:10</option>
                                                <option value="16:20">16:20</option>
                                                <option value="16:30">16:30</option>
                                                <option value="16:40">16:40</option>
                                                <option value="16:50">16:50</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:10">17:10</option>
                                                <option value="17:20">17:20</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:40">17:40</option>
                                                <option value="17:50">17:50</option>
                                                <option value="18:00">18:00</option>
                                                <option value="18:10">18:10</option>
                                                <option value="18:20">18:20</option>
                                                <option value="18:30">18:30</option>
                                                <option value="18:40">18:40</option>
                                                <option value="18:50">18:50</option>
                                                <option value="19:00">19:00</option>
                                                <option value="19:10">19:10</option>
                                                <option value="19:20">19:20</option>
                                                <option value="19:30">19:30</option>
                                                <option value="19:40">19:40</option>
                                                <option value="19:50">19:50</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:10">20:10</option>
                                                <option value="20:20">20:20</option>
                                                <option value="20:30">20:30</option>
                                                <option value="20:40">20:40</option>
                                                <option value="20:50">20:50</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:10">21:10</option>
                                                <option value="21:20">21:20</option>
                                                <option value="21:30">21:30</option>
                                                <option value="21:40">21:40</option>
                                                <option value="21:50">21:50</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:10">22:10</option>
                                                <option value="22:20">22:20</option>
                                                <option value="22:30">22:30</option>
                                                <option value="22:40">22:40</option>
                                                <option value="22:50">22:50</option>
                                                <option value="23:00">23:00</option>
                                                <option value="23:10">23:10</option>
                                                <option value="23:20">23:20</option>
                                                <option value="23:30">23:30</option>
                                                <option value="23:40">23:40</option>
                                                <option value="23:50">23:50</option>
                                                <option value="23:59">23:59</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <button type="button" class="btn btn-info mb-5 ml-3" @click="addBusinessHours">Add another set of hours</button>
                                    <br/>
                                </tr>
                                <tr>
                                    <th colspan="2" style="color: #FF802B;" >CLOSING DATES</th>
                                </tr>
                                <tr v-for="(closings,index) in dataForm.closing_dates" :key="index">
                                    <!-- <pre>{{closings.index}}</pre> -->
                                    <td colspan="2">
                                        <Datepicker v-model="dataForm.closing_dates[index]" class="form-input" style="width: 300px" :enableTimePicker="false" autoApply placeholder="Select Closing Date" />
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <button type="button" class="btn btn-info mb-5 ml-3" @click="addClosingDates">Add another closing date</button>
                                    <br/>
                                </tr>
                                <tr>
                                    <th colspan="2" style="color: #FF802B;" >DELIVERY HOURS</th>
                                </tr>
                                <tr>
                                    <td>
                                       <b>Same as bussiness hours</b>
                                        <div class="form-check form-check-inline m-2 ">
                                            <input  v-model="dataForm.delivery_same_bussiness"  :value="'1'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio2">yes</label>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <input  v-model="dataForm.delivery_same_bussiness"  :value="'0'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio2">no</label>
                                        </div>
                                    </td>
                                    <td>
                                       <div class="form-check form-check-inline  ">
                                            <label class="form-check-label" for="inlineRadio2">GAP</label>
                                            <input v-model="dataForm.delivery_gaptime" class="form-control" type="text" >
                                            <label class="form-check-label" for="inlineRadio2">Min</label>
                                        </div>
                                    </td>
                                </tr>
                                <template v-if="dataForm.delivery_same_bussiness == '0'">  
                                <tr v-for="(val,index) in dataForm.delivery.day" :key="index">
                                    <td style="width: 600px">
                                        <Multiselect
                                        v-model="dataForm.delivery.day[index]"
                                        mode="tags"
                                        :close-on-select="false"
                                        :searchable="true"
                                        :create-option="true"
                                        :options="[
                                            { value: 0, label: 'Every Day' },
                                            { value: 2, label: 'Monday' },
                                            { value: 3, label: 'Tuesday' },
                                            { value: 4, label: 'Wednesday' },
                                            { value: 5, label: 'Thursday' },
                                            { value: 6, label: 'Friday' },
                                            { value: 7, label: 'Saturday' },
                                            { value: 8, label: 'Sunday' },
                                        ]"
                                        />

                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline ">
                                            <label class="form-check-label">From:</label>
                                            <select class="form-control" v-model="dataForm.delivery.from[index]" name="" id=""   >
                                                <option value="00:00">00:00</option>
                                                <option value="0:00">0:00</option>
                                                <option value="0:10">0:10</option>
                                                <option value="0:20">0:20</option>
                                                <option value="0:30">0:30</option>
                                                <option value="0:40">0:40</option>
                                                <option value="0:50">0:50</option>
                                                <option value="1:00">1:00</option>
                                                <option value="1:10">1:10</option>
                                                <option value="1:20">1:20</option>
                                                <option value="1:30">1:30</option>
                                                <option value="1:40">1:40</option>
                                                <option value="1:50">1:50</option>
                                                <option value="2:00">2:00</option>
                                                <option value="2:10">2:10</option>
                                                <option value="2:20">2:20</option>
                                                <option value="2:30">2:30</option>
                                                <option value="2:40">2:40</option>
                                                <option value="2:50">2:50</option>
                                                <option value="3:00">3:00</option>
                                                <option value="3:10">3:10</option>
                                                <option value="3:20">3:20</option>
                                                <option value="3:30">3:30</option>
                                                <option value="3:40">3:40</option>
                                                <option value="3:50">3:50</option>
                                                <option value="4:00">4:00</option>
                                                <option value="4:10">4:10</option>
                                                <option value="4:20">4:20</option>
                                                <option value="4:30">4:30</option>
                                                <option value="4:40">4:40</option>
                                                <option value="4:50">4:50</option>
                                                <option value="5:00">5:00</option>
                                                <option value="5:10">5:10</option>
                                                <option value="5:20">5:20</option>
                                                <option value="5:30">5:30</option>
                                                <option value="5:40">5:40</option>
                                                <option value="5:50">5:50</option>
                                                <option value="6:00">6:00</option>
                                                <option value="6:10">6:10</option>
                                                <option value="6:20">6:20</option>
                                                <option value="6:30">6:30</option>
                                                <option value="6:40">6:40</option>
                                                <option value="6:50">6:50</option>
                                                <option value="7:00">7:00</option>
                                                <option value="7:10">7:10</option>
                                                <option value="7:20">7:20</option>
                                                <option value="7:30">7:30</option>
                                                <option value="7:40">7:40</option>
                                                <option value="7:50">7:50</option>
                                                <option value="8:00">8:00</option>
                                                <option value="8:10">8:10</option>
                                                <option value="8:20">8:20</option>
                                                <option value="8:30">8:30</option>
                                                <option value="8:40">8:40</option>
                                                <option value="8:50">8:50</option>
                                                <option value="9:00">9:00</option>
                                                <option value="9:10">9:10</option>
                                                <option value="9:20">9:20</option>
                                                <option value="9:30">9:30</option>
                                                <option value="9:40">9:40</option>
                                                <option value="9:50">9:50</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:10">10:10</option>
                                                <option value="10:20">10:20</option>
                                                <option value="10:30">10:30</option>
                                                <option value="10:40">10:40</option>
                                                <option value="10:50">10:50</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:10">11:10</option>
                                                <option value="11:20">11:20</option>
                                                <option value="11:30">11:30</option>
                                                <option value="11:40">11:40</option>
                                                <option value="11:50">11:50</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:10">12:10</option>
                                                <option value="12:20">12:20</option>
                                                <option value="12:30">12:30</option>
                                                <option value="12:40">12:40</option>
                                                <option value="12:50">12:50</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:10">13:10</option>
                                                <option value="13:20">13:20</option>
                                                <option value="13:30">13:30</option>
                                                <option value="13:40">13:40</option>
                                                <option value="13:50">13:50</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:10">14:10</option>
                                                <option value="14:20">14:20</option>
                                                <option value="14:30">14:30</option>
                                                <option value="14:40">14:40</option>
                                                <option value="14:50">14:50</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:10">15:10</option>
                                                <option value="15:20">15:20</option>
                                                <option value="15:30">15:30</option>
                                                <option value="15:40">15:40</option>
                                                <option value="15:50">15:50</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:10">16:10</option>
                                                <option value="16:20">16:20</option>
                                                <option value="16:30">16:30</option>
                                                <option value="16:40">16:40</option>
                                                <option value="16:50">16:50</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:10">17:10</option>
                                                <option value="17:20">17:20</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:40">17:40</option>
                                                <option value="17:50">17:50</option>
                                                <option value="18:00">18:00</option>
                                                <option value="18:10">18:10</option>
                                                <option value="18:20">18:20</option>
                                                <option value="18:30">18:30</option>
                                                <option value="18:40">18:40</option>
                                                <option value="18:50">18:50</option>
                                                <option value="19:00">19:00</option>
                                                <option value="19:10">19:10</option>
                                                <option value="19:20">19:20</option>
                                                <option value="19:30">19:30</option>
                                                <option value="19:40">19:40</option>
                                                <option value="19:50">19:50</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:10">20:10</option>
                                                <option value="20:20">20:20</option>
                                                <option value="20:30">20:30</option>
                                                <option value="20:40">20:40</option>
                                                <option value="20:50">20:50</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:10">21:10</option>
                                                <option value="21:20">21:20</option>
                                                <option value="21:30">21:30</option>
                                                <option value="21:40">21:40</option>
                                                <option value="21:50">21:50</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:10">22:10</option>
                                                <option value="22:20">22:20</option>
                                                <option value="22:30">22:30</option>
                                                <option value="22:40">22:40</option>
                                                <option value="22:50">22:50</option>
                                                <option value="23:00">23:00</option>
                                                <option value="23:10">23:10</option>
                                                <option value="23:20">23:20</option>
                                                <option value="23:30">23:30</option>
                                                <option value="23:40">23:40</option>
                                                <option value="23:50">23:50</option>
                                                <option value="23:59">23:59</option>
                                            </select>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <label class="form-check-label">To:</label>
                                             <select class="form-control" v-model="dataForm.delivery.to[index]" name="" id=""   >
                                                <option value="00:00">00:00</option>
                                                <option value="0:00">0:00</option>
                                                <option value="0:10">0:10</option>
                                                <option value="0:20">0:20</option>
                                                <option value="0:30">0:30</option>
                                                <option value="0:40">0:40</option>
                                                <option value="0:50">0:50</option>
                                                <option value="1:00">1:00</option>
                                                <option value="1:10">1:10</option>
                                                <option value="1:20">1:20</option>
                                                <option value="1:30">1:30</option>
                                                <option value="1:40">1:40</option>
                                                <option value="1:50">1:50</option>
                                                <option value="2:00">2:00</option>
                                                <option value="2:10">2:10</option>
                                                <option value="2:20">2:20</option>
                                                <option value="2:30">2:30</option>
                                                <option value="2:40">2:40</option>
                                                <option value="2:50">2:50</option>
                                                <option value="3:00">3:00</option>
                                                <option value="3:10">3:10</option>
                                                <option value="3:20">3:20</option>
                                                <option value="3:30">3:30</option>
                                                <option value="3:40">3:40</option>
                                                <option value="3:50">3:50</option>
                                                <option value="4:00">4:00</option>
                                                <option value="4:10">4:10</option>
                                                <option value="4:20">4:20</option>
                                                <option value="4:30">4:30</option>
                                                <option value="4:40">4:40</option>
                                                <option value="4:50">4:50</option>
                                                <option value="5:00">5:00</option>
                                                <option value="5:10">5:10</option>
                                                <option value="5:20">5:20</option>
                                                <option value="5:30">5:30</option>
                                                <option value="5:40">5:40</option>
                                                <option value="5:50">5:50</option>
                                                <option value="6:00">6:00</option>
                                                <option value="6:10">6:10</option>
                                                <option value="6:20">6:20</option>
                                                <option value="6:30">6:30</option>
                                                <option value="6:40">6:40</option>
                                                <option value="6:50">6:50</option>
                                                <option value="7:00">7:00</option>
                                                <option value="7:10">7:10</option>
                                                <option value="7:20">7:20</option>
                                                <option value="7:30">7:30</option>
                                                <option value="7:40">7:40</option>
                                                <option value="7:50">7:50</option>
                                                <option value="8:00">8:00</option>
                                                <option value="8:10">8:10</option>
                                                <option value="8:20">8:20</option>
                                                <option value="8:30">8:30</option>
                                                <option value="8:40">8:40</option>
                                                <option value="8:50">8:50</option>
                                                <option value="9:00">9:00</option>
                                                <option value="9:10">9:10</option>
                                                <option value="9:20">9:20</option>
                                                <option value="9:30">9:30</option>
                                                <option value="9:40">9:40</option>
                                                <option value="9:50">9:50</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:10">10:10</option>
                                                <option value="10:20">10:20</option>
                                                <option value="10:30">10:30</option>
                                                <option value="10:40">10:40</option>
                                                <option value="10:50">10:50</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:10">11:10</option>
                                                <option value="11:20">11:20</option>
                                                <option value="11:30">11:30</option>
                                                <option value="11:40">11:40</option>
                                                <option value="11:50">11:50</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:10">12:10</option>
                                                <option value="12:20">12:20</option>
                                                <option value="12:30">12:30</option>
                                                <option value="12:40">12:40</option>
                                                <option value="12:50">12:50</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:10">13:10</option>
                                                <option value="13:20">13:20</option>
                                                <option value="13:30">13:30</option>
                                                <option value="13:40">13:40</option>
                                                <option value="13:50">13:50</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:10">14:10</option>
                                                <option value="14:20">14:20</option>
                                                <option value="14:30">14:30</option>
                                                <option value="14:40">14:40</option>
                                                <option value="14:50">14:50</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:10">15:10</option>
                                                <option value="15:20">15:20</option>
                                                <option value="15:30">15:30</option>
                                                <option value="15:40">15:40</option>
                                                <option value="15:50">15:50</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:10">16:10</option>
                                                <option value="16:20">16:20</option>
                                                <option value="16:30">16:30</option>
                                                <option value="16:40">16:40</option>
                                                <option value="16:50">16:50</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:10">17:10</option>
                                                <option value="17:20">17:20</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:40">17:40</option>
                                                <option value="17:50">17:50</option>
                                                <option value="18:00">18:00</option>
                                                <option value="18:10">18:10</option>
                                                <option value="18:20">18:20</option>
                                                <option value="18:30">18:30</option>
                                                <option value="18:40">18:40</option>
                                                <option value="18:50">18:50</option>
                                                <option value="19:00">19:00</option>
                                                <option value="19:10">19:10</option>
                                                <option value="19:20">19:20</option>
                                                <option value="19:30">19:30</option>
                                                <option value="19:40">19:40</option>
                                                <option value="19:50">19:50</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:10">20:10</option>
                                                <option value="20:20">20:20</option>
                                                <option value="20:30">20:30</option>
                                                <option value="20:40">20:40</option>
                                                <option value="20:50">20:50</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:10">21:10</option>
                                                <option value="21:20">21:20</option>
                                                <option value="21:30">21:30</option>
                                                <option value="21:40">21:40</option>
                                                <option value="21:50">21:50</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:10">22:10</option>
                                                <option value="22:20">22:20</option>
                                                <option value="22:30">22:30</option>
                                                <option value="22:40">22:40</option>
                                                <option value="22:50">22:50</option>
                                                <option value="23:00">23:00</option>
                                                <option value="23:10">23:10</option>
                                                <option value="23:20">23:20</option>
                                                <option value="23:30">23:30</option>
                                                <option value="23:40">23:40</option>
                                                <option value="23:50">23:50</option>
                                                <option value="23:59">23:59</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <button type="button" class="btn btn-info mb-5 ml-3" @click="addDeliveryHours">Add another closing date</button>
                                    <br/>
                                </tr>
                                </template>
                                <tr>
                                    <th colspan="2" style="color: #FF802B;" >COLLECTION HOURS</th>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Same as bussiness hours</b>
                                        <div class="form-check form-check-inline m-2 ">
                                            <input v-model="dataForm.collection_same_bussiness"  :value="'1'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio2">yes</label>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <input v-model="dataForm.collection_same_bussiness"  :value="'0'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio2">no</label>
                                        </div>
                                    </td>
                                    <td>
                                       <div class="form-check form-check-inline  ">
                                            <label class="form-check-label" for="inlineRadio2">GAP</label>
                                            <input v-model="dataForm.collection_gaptime" class="form-control" type="text" >
                                            <label class="form-check-label" for="inlineRadio2">Min</label>
                                        </div>
                                    </td>
                                </tr>
                                <template v-if="dataForm.collection_same_bussiness == '0'">  
                                <tr v-for="(val,index) in dataForm.collection.day" :key="index">
                                    <td style="width: 600px">
                                        <Multiselect
                                        v-model="dataForm.collection.day[index]"
                                        mode="tags"
                                        :close-on-select="false"
                                        :searchable="true"
                                        :create-option="true"
                                        :options="[
                                            { value: 0, label: 'Every Day' },
                                            { value: 2, label: 'Monday' },
                                            { value: 3, label: 'Tuesday' },
                                            { value: 4, label: 'Wednesday' },
                                            { value: 5, label: 'Thursday' },
                                            { value: 6, label: 'Friday' },
                                            { value: 7, label: 'Saturday' },
                                            { value: 8, label: 'Sunday' },
                                        ]"
                                        />

                                    </td>
                                    <td>
                                        <div class="form-check form-check-inline ">
                                            <label class="form-check-label">From:</label>
                                            <select class="form-control" v-model="dataForm.collection.from[index]" name="" id=""   >
                                                <option value="00:00">00:00</option>
                                                <option value="0:00">0:00</option>
                                                <option value="0:10">0:10</option>
                                                <option value="0:20">0:20</option>
                                                <option value="0:30">0:30</option>
                                                <option value="0:40">0:40</option>
                                                <option value="0:50">0:50</option>
                                                <option value="1:00">1:00</option>
                                                <option value="1:10">1:10</option>
                                                <option value="1:20">1:20</option>
                                                <option value="1:30">1:30</option>
                                                <option value="1:40">1:40</option>
                                                <option value="1:50">1:50</option>
                                                <option value="2:00">2:00</option>
                                                <option value="2:10">2:10</option>
                                                <option value="2:20">2:20</option>
                                                <option value="2:30">2:30</option>
                                                <option value="2:40">2:40</option>
                                                <option value="2:50">2:50</option>
                                                <option value="3:00">3:00</option>
                                                <option value="3:10">3:10</option>
                                                <option value="3:20">3:20</option>
                                                <option value="3:30">3:30</option>
                                                <option value="3:40">3:40</option>
                                                <option value="3:50">3:50</option>
                                                <option value="4:00">4:00</option>
                                                <option value="4:10">4:10</option>
                                                <option value="4:20">4:20</option>
                                                <option value="4:30">4:30</option>
                                                <option value="4:40">4:40</option>
                                                <option value="4:50">4:50</option>
                                                <option value="5:00">5:00</option>
                                                <option value="5:10">5:10</option>
                                                <option value="5:20">5:20</option>
                                                <option value="5:30">5:30</option>
                                                <option value="5:40">5:40</option>
                                                <option value="5:50">5:50</option>
                                                <option value="6:00">6:00</option>
                                                <option value="6:10">6:10</option>
                                                <option value="6:20">6:20</option>
                                                <option value="6:30">6:30</option>
                                                <option value="6:40">6:40</option>
                                                <option value="6:50">6:50</option>
                                                <option value="7:00">7:00</option>
                                                <option value="7:10">7:10</option>
                                                <option value="7:20">7:20</option>
                                                <option value="7:30">7:30</option>
                                                <option value="7:40">7:40</option>
                                                <option value="7:50">7:50</option>
                                                <option value="8:00">8:00</option>
                                                <option value="8:10">8:10</option>
                                                <option value="8:20">8:20</option>
                                                <option value="8:30">8:30</option>
                                                <option value="8:40">8:40</option>
                                                <option value="8:50">8:50</option>
                                                <option value="9:00">9:00</option>
                                                <option value="9:10">9:10</option>
                                                <option value="9:20">9:20</option>
                                                <option value="9:30">9:30</option>
                                                <option value="9:40">9:40</option>
                                                <option value="9:50">9:50</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:10">10:10</option>
                                                <option value="10:20">10:20</option>
                                                <option value="10:30">10:30</option>
                                                <option value="10:40">10:40</option>
                                                <option value="10:50">10:50</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:10">11:10</option>
                                                <option value="11:20">11:20</option>
                                                <option value="11:30">11:30</option>
                                                <option value="11:40">11:40</option>
                                                <option value="11:50">11:50</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:10">12:10</option>
                                                <option value="12:20">12:20</option>
                                                <option value="12:30">12:30</option>
                                                <option value="12:40">12:40</option>
                                                <option value="12:50">12:50</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:10">13:10</option>
                                                <option value="13:20">13:20</option>
                                                <option value="13:30">13:30</option>
                                                <option value="13:40">13:40</option>
                                                <option value="13:50">13:50</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:10">14:10</option>
                                                <option value="14:20">14:20</option>
                                                <option value="14:30">14:30</option>
                                                <option value="14:40">14:40</option>
                                                <option value="14:50">14:50</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:10">15:10</option>
                                                <option value="15:20">15:20</option>
                                                <option value="15:30">15:30</option>
                                                <option value="15:40">15:40</option>
                                                <option value="15:50">15:50</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:10">16:10</option>
                                                <option value="16:20">16:20</option>
                                                <option value="16:30">16:30</option>
                                                <option value="16:40">16:40</option>
                                                <option value="16:50">16:50</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:10">17:10</option>
                                                <option value="17:20">17:20</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:40">17:40</option>
                                                <option value="17:50">17:50</option>
                                                <option value="18:00">18:00</option>
                                                <option value="18:10">18:10</option>
                                                <option value="18:20">18:20</option>
                                                <option value="18:30">18:30</option>
                                                <option value="18:40">18:40</option>
                                                <option value="18:50">18:50</option>
                                                <option value="19:00">19:00</option>
                                                <option value="19:10">19:10</option>
                                                <option value="19:20">19:20</option>
                                                <option value="19:30">19:30</option>
                                                <option value="19:40">19:40</option>
                                                <option value="19:50">19:50</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:10">20:10</option>
                                                <option value="20:20">20:20</option>
                                                <option value="20:30">20:30</option>
                                                <option value="20:40">20:40</option>
                                                <option value="20:50">20:50</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:10">21:10</option>
                                                <option value="21:20">21:20</option>
                                                <option value="21:30">21:30</option>
                                                <option value="21:40">21:40</option>
                                                <option value="21:50">21:50</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:10">22:10</option>
                                                <option value="22:20">22:20</option>
                                                <option value="22:30">22:30</option>
                                                <option value="22:40">22:40</option>
                                                <option value="22:50">22:50</option>
                                                <option value="23:00">23:00</option>
                                                <option value="23:10">23:10</option>
                                                <option value="23:20">23:20</option>
                                                <option value="23:30">23:30</option>
                                                <option value="23:40">23:40</option>
                                                <option value="23:50">23:50</option>
                                                <option value="23:59">23:59</option>
                                            </select>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <label class="form-check-label">To:</label>
                                             <select class="form-control" v-model="dataForm.collection.to[index]" name="" id=""   >
                                                <option value="00:00">00:00</option>
                                                <option value="0:00">0:00</option>
                                                <option value="0:10">0:10</option>
                                                <option value="0:20">0:20</option>
                                                <option value="0:30">0:30</option>
                                                <option value="0:40">0:40</option>
                                                <option value="0:50">0:50</option>
                                                <option value="1:00">1:00</option>
                                                <option value="1:10">1:10</option>
                                                <option value="1:20">1:20</option>
                                                <option value="1:30">1:30</option>
                                                <option value="1:40">1:40</option>
                                                <option value="1:50">1:50</option>
                                                <option value="2:00">2:00</option>
                                                <option value="2:10">2:10</option>
                                                <option value="2:20">2:20</option>
                                                <option value="2:30">2:30</option>
                                                <option value="2:40">2:40</option>
                                                <option value="2:50">2:50</option>
                                                <option value="3:00">3:00</option>
                                                <option value="3:10">3:10</option>
                                                <option value="3:20">3:20</option>
                                                <option value="3:30">3:30</option>
                                                <option value="3:40">3:40</option>
                                                <option value="3:50">3:50</option>
                                                <option value="4:00">4:00</option>
                                                <option value="4:10">4:10</option>
                                                <option value="4:20">4:20</option>
                                                <option value="4:30">4:30</option>
                                                <option value="4:40">4:40</option>
                                                <option value="4:50">4:50</option>
                                                <option value="5:00">5:00</option>
                                                <option value="5:10">5:10</option>
                                                <option value="5:20">5:20</option>
                                                <option value="5:30">5:30</option>
                                                <option value="5:40">5:40</option>
                                                <option value="5:50">5:50</option>
                                                <option value="6:00">6:00</option>
                                                <option value="6:10">6:10</option>
                                                <option value="6:20">6:20</option>
                                                <option value="6:30">6:30</option>
                                                <option value="6:40">6:40</option>
                                                <option value="6:50">6:50</option>
                                                <option value="7:00">7:00</option>
                                                <option value="7:10">7:10</option>
                                                <option value="7:20">7:20</option>
                                                <option value="7:30">7:30</option>
                                                <option value="7:40">7:40</option>
                                                <option value="7:50">7:50</option>
                                                <option value="8:00">8:00</option>
                                                <option value="8:10">8:10</option>
                                                <option value="8:20">8:20</option>
                                                <option value="8:30">8:30</option>
                                                <option value="8:40">8:40</option>
                                                <option value="8:50">8:50</option>
                                                <option value="9:00">9:00</option>
                                                <option value="9:10">9:10</option>
                                                <option value="9:20">9:20</option>
                                                <option value="9:30">9:30</option>
                                                <option value="9:40">9:40</option>
                                                <option value="9:50">9:50</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:10">10:10</option>
                                                <option value="10:20">10:20</option>
                                                <option value="10:30">10:30</option>
                                                <option value="10:40">10:40</option>
                                                <option value="10:50">10:50</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:10">11:10</option>
                                                <option value="11:20">11:20</option>
                                                <option value="11:30">11:30</option>
                                                <option value="11:40">11:40</option>
                                                <option value="11:50">11:50</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:10">12:10</option>
                                                <option value="12:20">12:20</option>
                                                <option value="12:30">12:30</option>
                                                <option value="12:40">12:40</option>
                                                <option value="12:50">12:50</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:10">13:10</option>
                                                <option value="13:20">13:20</option>
                                                <option value="13:30">13:30</option>
                                                <option value="13:40">13:40</option>
                                                <option value="13:50">13:50</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:10">14:10</option>
                                                <option value="14:20">14:20</option>
                                                <option value="14:30">14:30</option>
                                                <option value="14:40">14:40</option>
                                                <option value="14:50">14:50</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:10">15:10</option>
                                                <option value="15:20">15:20</option>
                                                <option value="15:30">15:30</option>
                                                <option value="15:40">15:40</option>
                                                <option value="15:50">15:50</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:10">16:10</option>
                                                <option value="16:20">16:20</option>
                                                <option value="16:30">16:30</option>
                                                <option value="16:40">16:40</option>
                                                <option value="16:50">16:50</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:10">17:10</option>
                                                <option value="17:20">17:20</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:40">17:40</option>
                                                <option value="17:50">17:50</option>
                                                <option value="18:00">18:00</option>
                                                <option value="18:10">18:10</option>
                                                <option value="18:20">18:20</option>
                                                <option value="18:30">18:30</option>
                                                <option value="18:40">18:40</option>
                                                <option value="18:50">18:50</option>
                                                <option value="19:00">19:00</option>
                                                <option value="19:10">19:10</option>
                                                <option value="19:20">19:20</option>
                                                <option value="19:30">19:30</option>
                                                <option value="19:40">19:40</option>
                                                <option value="19:50">19:50</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:10">20:10</option>
                                                <option value="20:20">20:20</option>
                                                <option value="20:30">20:30</option>
                                                <option value="20:40">20:40</option>
                                                <option value="20:50">20:50</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:10">21:10</option>
                                                <option value="21:20">21:20</option>
                                                <option value="21:30">21:30</option>
                                                <option value="21:40">21:40</option>
                                                <option value="21:50">21:50</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:10">22:10</option>
                                                <option value="22:20">22:20</option>
                                                <option value="22:30">22:30</option>
                                                <option value="22:40">22:40</option>
                                                <option value="22:50">22:50</option>
                                                <option value="23:00">23:00</option>
                                                <option value="23:10">23:10</option>
                                                <option value="23:20">23:20</option>
                                                <option value="23:30">23:30</option>
                                                <option value="23:40">23:40</option>
                                                <option value="23:50">23:50</option>
                                                <option value="23:59">23:59</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <button type="button" class="btn btn-info mb-5 ml-3" @click="addCollectionHours">Add another closing date</button>
                                    <br/>
                                </tr>
                                </template>
                                <tr>
                                    <th colspan="2" style="color: #FF802B;" >SETTING ORDER</th>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <b> Accept orders out of bussiness hours?</b>
                                        <div class="form-check form-check-inline m-4">
                                            <input v-model="dataForm.order_outof_bussiness_time" :value="'1'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio2">yes</label>
                                        </div>
                                        <div class="form-check form-check-inline  ">
                                            <input  v-model="dataForm.order_outof_bussiness_time" :value="'0'" class="form-check-input" type="radio" >
                                            <label class="form-check-label" for="inlineRadio2">no</label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
              </div>    
            </form>
          </div>
        </div>
      </div>
    </section>

  </admin-layout>
</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout";
import { Head,Link } from '@inertiajs/inertia-vue3';
import Multiselect from '@vueform/multiselect'
import Datepicker from 'vue3-date-time-picker';
import 'vue3-date-time-picker/dist/main.css';
import useValidate from '@vuelidate/core'
import { required, email, minLength,maxLength, sameAs, numeric } from '@vuelidate/validators'
import { reactive, toRefs } from 'vue'
export default {
  components: {
    Head,
    Link,
    AdminLayout,
    Multiselect,
    Datepicker,
  },

  props: {
      timesetting: Object,
  },
  setup(props){
      let dataForm = toRefs(props).timesetting
      let dataForm = reactive()
      return {dataForm}
  },
  data() {
      return {
          v$: useValidate(),
         
        }
    },

    validations() {
        return {
            
          
        }
    },

    mounted(){
        if(!this.dataForm.delivery.day){
            this.dataForm.delivery.day=[];
            this.dataForm.delivery.from=[];
            this.dataForm.delivery.to=[];
        }
            if(!this.dataForm.collection_same_bussiness == 0 ){
                this.dataForm.collection.day=[];
                this.dataForm.collection.from=[];
                this.dataForm.collection.to=[];
            }
        
    },

    methods:{
        
        updateSettings(data){

            
            // this.v$.settings.$touch()
            // if(!this.v$.settings.$error){
                
                let con = confirm("Save Changes?");

                if(con){
                    this.$inertia.post(this.route('admin.settings.openclose.update',data,{
                            replace: true, 
                            preserveState: true
                            }))

                }
            },
            addBusinessHours(){
                var arr=[];
                this.dataForm.bussines.day.push(arr);
                this.dataForm.bussines.from.push('');
                this.dataForm.bussines.to.push('');
                
            },
            addDeliveryHours(){
                var arr=[];
                this.dataForm.delivery.day.push(arr);
                this.dataForm.delivery.from.push('');
                this.dataForm.delivery.to.push('');
                
            },
            addCollectionHours(){
                var arr=[];
                this.dataForm.collection.day.push(arr);
                this.dataForm.collection.from.push('');
                this.dataForm.collection.to.push('');
                
            },
            addClosingDates(){
                var arr='';
                this.dataForm.closing_dates.push(arr); 
            },

    },
  watch: {
    
  }
};
</script>
<style src="@vueform/multiselect/themes/default.css"></style>
<style>
.info {
    color: #666;
    font-size: 11px;
    font-weight: 400;
    font-family: Verdana,Geneva,sans-serif;
    display: block;
}
</style>
