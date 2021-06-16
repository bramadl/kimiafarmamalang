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
    <div>
      hahahah
    </div>
  </div>
</template>

<script>
import CardInfo from './kf/CardInfo.vue'

export default {
  name: 'Home',

  components: {
    CardInfo
  }
}
</script>
