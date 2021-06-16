<template>
  <div>
    <div class="grid grid-cols-3 gap-6 mb-10">
      <CardInfo
        :value="42"
        :label="{
          en: 'Doctors',
          in: 'Data Dokter'
        }"
      />
      <CardInfo
        :value="286"
        :label="{
          en: 'Patients',
          in: 'Data Pasien'
        }"
      />
      <CardInfo
        :value="214"
        :label="{
          en: 'Prescriptions',
          in: 'Data Resep Obat'
        }"
      />
    </div>
    <div class="rounded-md shadow-md bg-white">
      <div class="py-4 px-3 border-b border-primary-blue-50">
        <h1 class="font-medium">Dokter yang Praktek Hari Ini</h1>
      </div>
      <div class="py-4 px-3">
        <div class="grid grid-cols-3 gap-6">
          <CardDoctor />
          <CardDoctor />
          <CardDoctor />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import CardDoctor from './kf/CardDoctor.vue'
import CardInfo from './kf/CardInfo.vue'

export default {
  name: 'Home',

  components: {
    CardDoctor,
    CardInfo,
  }
}
</script>
