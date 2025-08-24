<script setup lang="ts">

import Icon from "@/components/Icon/Icon.vue";

type Props = {
  text: string;
};
const props = defineProps<Props>();

</script>
<template>
  <div class="hostinger-notice d-flex align-items-center w-100 mt-3">
    <Icon
        name="icon-info"
        color="gray-dark"
    />
    <p class="text-body-3">{{props?.text}}</p>
  </div>
</template>

<style lang="scss" scoped>
.hostinger-notice {
  background: var(--gray-light);
  color: var(--gray-dark);
  border: 1px solid var(--gray-border);
  border-radius: 12px;
  padding: 12px 16px;
  font-size: var(--font-size-sm);
  gap: 1em;
}
</style>