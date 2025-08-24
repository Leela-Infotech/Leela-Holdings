<script lang="ts" setup>
import PluginSplitNotice from "@/components/PluginSplitNotice.vue";
import { HeaderButton, PreviewSiteButton, EditSiteButton } from "@/types";
import Button from "@/components/Button/Button.vue";
import { useGeneralStoreData } from "@/stores";

const { siteUrl, editSiteUrl } = useGeneralStoreData();

type Props = {
  title?: string;
  headerButton?: HeaderButton;
  previewSiteButton?: PreviewSiteButton;
  editSiteButton?: EditSiteButton;
};

const props = defineProps<Props>();
</script>

<template>
  <div class="wrapper">
    <div class="wrapper__content">
      <PluginSplitNotice class="h-mb-20" />
      <div class="wrapper__header">
        <h1 v-if="props.title" class="text-heading-1">{{ props.title }}</h1>
          <div class="wrapper__buttons-wrapper">
        <Button
          class="wrapper__button"
          v-if="headerButton"
          @click="headerButton?.onClick"
          :to="headerButton?.href"
          size="small"
          variant="outline"
          :target="headerButton.href ? '_blank' : undefined"
          icon-append="icon-launch"
          >{{ headerButton.text }}</Button
        >
          <Button
              class="wrapper__button"
              v-if="previewSiteButton && siteUrl"
              @click="previewSiteButton?.onClick"
              :to="siteUrl"
              size="small"
              variant="outline"
              :target="siteUrl ? '_blank' : undefined"
              icon-prepend="icon-visibility"
          >{{ previewSiteButton.text }}</Button
          >
          <Button
              class="wrapper__button"
              v-if="editSiteButton && editSiteUrl"
              @click="headerButton?.onClick"
              :to="editSiteUrl"
              size="small"
              variant="outline"
              :target="editSiteUrl ? '_blank' : undefined"
              icon-prepend="icon-launch"
          >{{ editSiteButton.text }}</Button
          >
          </div>
      </div>
      <slot />
    </div>
  </div>
</template>

<style lang="scss" scoped>
.wrapper {
  padding: 48px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: left;
  min-height: calc(100vh - var(--header-height));

  @media (max-width: 768px) {
    padding-right: 10px;
    padding-left: 0px;
  }

  &__buttons-wrapper {
    display: flex;

    @media (max-width: 500px) {
      width: 100%;
      flex-wrap: wrap;
    }
  }

  &__header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
  }

  &__button {
    background-color: var(--white);
    margin-left: 10px;
    display: flex;
    flex-wrap: nowrap;

    @media (max-width: 500px) {
      margin: 5px 0;
    }
  }

  &__content {
    max-width: 740px;
    width: 100%;
  }
}
</style>
