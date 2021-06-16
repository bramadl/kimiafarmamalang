<template>
  <div>
    <div class="flex items-center justify-between mb-10">
      <CreateNewDoctorButton @createNewDoctor="createNewDoctor"/>
      <SearchInputForm @search="searchDoctor" />
    </div>

    <div class="overflow-hidden bg-white rounded-md shadow-md">
      <div class="flex items-center justify-between border-b border-blue-primary-10 py-4 px-6">
        <div>
          <h1 class="font-medium">
            Data Dokter Di Apotek
          </h1>
        </div>
        <div>
          <div class="flex items-center">
            <p class="text-sm font-light mr-4">Menampilkan draft 1 - 10 dari 500 data</p>
            <div class="flex items-center justify-center">
              <button class="flex items-center mx-2 focus:outline-none">
                <i class="bx bxs-left-arrow"></i>
              </button>
              <button class="flex items-center mx-2 focus:outline-none">
                <i class="bx bxs-right-arrow"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="overflow-auto">
        <TableView
          :tableOptions="tableOptions"
          :data="filteredDoctors"
        />
      </div>
    </div>
  </div>
</template>

<script>
import CreateNewDoctorButton from '../components/CreateNewDoctorButton.vue'
import SearchInputForm from '../components/SearchInputForm'
import TableView from '../components/kf/TableView.vue'

export default {
  name: 'Doctors',

  components: {
    CreateNewDoctorButton,
    SearchInputForm,
    TableView
  },

  data () {
    return {
      tableOptions: {
        headers: [
          'Profil Dokter',
          'Surat Izin Praktek',
          'Alamat Rumah Dokter',
          'Alamat Praktek Dokter',
          'Jadwal Praktek Dokter'
        ],
        body: []
      },
      searchKeyword: ''
    }
  },

  computed: {
    filteredDoctors () {
      const doctors = this.tableOptions.body
      return doctors.filter(doctor => !doctor.fullname.toLowerCase().indexOf(this.searchKeyword.toLowerCase()))
    }
  },

  mounted () {
    this.fetchDoctors()
  },

  methods: {
    createNewDoctor () {
      // 
    },
    fetchDoctors () {
      const data = [
        {
          id: 0,
          fullname: 'Bambang Soemantri',
          titles: [
            {
              id: 0,
              title: 'dr.',
              type: 'prefix'
            },
            {
              id: 1,
              title: 'Sp. THT',
              type: 'suffix'
            }
          ],
          profile_picture: 'https://images.unsplash.com/photo-1537368910025-700350fe46c7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80',
          license: '446. DS / 036.1 / 35.73.306 / 2016',
          email_address: 'bambangsoemantri@gmail.com',
          phone_number: '+62 812-3456-7890',
          home_address: 'Ijen Nirwana Residence D4 - 8 Malang',
          work_address: 'Apotek KF. 53, Jl. Kawi 22 A, Malang',
          work_schedule: [
            {
              id: 1,
              day: 'Senin',
              time: '18:30'
            },
            {
              id: 2,
              day: 'Rabu',
              time: '18:30'
            },
            {
              id: 3,
              day: 'Jum\'at',
              time: '21:30'
            }
          ]
        },
        {
          id: 1,
          fullname: 'Herlina Angelina',
          titles: [
            {
              id: 0,
              title: 'dr.',
              type: 'prefix'
            },
            {
              id: 1,
              title: 'Sp. DV',
              type: 'suffix'
            }
          ],
          profile_picture: 'https://images.unsplash.com/photo-1559839734-2b71ea197ec2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80',
          license: '446. DS / 036.1 / 35.73.306 / 2016',
          email_address: 'herlinangelina@gmail.com',
          phone_number: '+62 812-3456-0987',
          home_address: 'Ijen Nirwana Residence D5 - 8 Malang',
          work_address: 'Apotek KF. 53, Jl. Kawi 21 A, Malang',
          work_schedule: [
            {
              id: 1,
              day: 'Selasa',
              time: '18:30'
            },
            {
              id: 2,
              day: 'Kamis',
              time: '18:30'
            }
          ]
        },
      ]

      this.tableOptions.body = data
    },
    searchDoctor (text) {
      this.searchKeyword = text
    }
  }
}
</script>
