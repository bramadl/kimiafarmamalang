<template>
  <table class="table-auto whitespace-nowrap w-full">
    <thead>
      <tr class="overflow-auto">
        <th
          v-for="(header, index) in tableOptions.headers"
          :key="index"
          class="px-6 py-4 text-md font-medium text-left"
        >{{ header }}</th>
      </tr>
    </thead>
    <tbody>
      <tr 
        v-for="(doctor, index) in data"
        :key="index"
        class="cursor-pointer hover:bg-primary-gray transition ease-out duration-300"
      >
        <td class="py-4 px-6">
          <div class="flex items-center">
            <div class="w-8 h-8">
              <img :src="doctor.profile_picture" alt="Doctor's Avatar" class="w-full h-full rounded-full object-cover">
            </div>
            <div class="ml-4">
              <h2 class="font-medium mb-1">{{ formatDoctorName(doctor.fullname, doctor.titles) }}</h2>
              <a
                class="font-light text-sm block leading-tight"
                href="mailto:bambangsoemantri@gmail.com">{{ doctor.email_address }}</a>
              <a
                class="font-light text-sm block leading-tight"
                href="tel:+6281234567890">{{ doctor.phone_number }}</a>
            </div>
          </div>
        </td>
        <td class="py-4 px-6">
          <div class="text-sm font-light">
            {{ doctor.license }}
          </div>
        </td>
        <td class="py-4 px-6">
          <a
            href="https://www.google.com/search?q=Ijen Nirwana Residence D4 - 8 Malang"
            target="_blank"
            class="underline text-sm font-light"
          >{{ doctor.home_address }}</a>
        </td>
        <td class="py-4 px-6">
          <a
            href="https://www.google.com/search?q=Ijen Nirwana Residence D4 - 8 Malang"
            target="_blank"
            class="underline text-sm font-light"
          >{{ doctor.work_address }}</a>
        </td>
        <td class="py-4 px-6">
          <div class="flex flex-wrap w-80 -mx-1">
            <span
              v-for="schedule in doctor.work_schedule"
              :key="schedule.id"
              class="m-1 px-3 py-1 rounded-full text-white text-xs"
              :class="generateBgColorForSchedule(schedule.day)"
            >
              {{ schedule.day }} - {{ schedule.time }}
            </span>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</template>

<script>
export default {
  name: 'TableView',

  props: {
    data: {
      type: [Array, Object],
      required: true
    },
    tableOptions: {
      type: [Array, Object],
      required: true
    }
  },

  methods: {
    formatDoctorName (name, titles) {
      const tempName = name.split(' ')
      const tempNameLength = tempName.length
      tempName[tempNameLength - 1] += ','

      titles.forEach(title => {
        title.type === 'prefix'
          ? tempName.unshift(title.title)
          : tempName.push(title.title)
      })
      
      return tempName.join(' ')
    },
    generateBgColorForSchedule (day) {
      return day === 'Senin'
        ? 'bg-blue-500'
        : day === 'Selasa'
          ? 'bg-yellow-500'
          : day === 'Rabu'
            ? 'bg-green-500'
            : day === 'Kamis'
              ? 'bg-purple-500'
              : day === 'Jum\'at'
                ? 'bg-indigo-500'
                : day === 'Sabtu'
                  ? 'bg-pink-500'
                  : ''
    }
  }
}
</script>
