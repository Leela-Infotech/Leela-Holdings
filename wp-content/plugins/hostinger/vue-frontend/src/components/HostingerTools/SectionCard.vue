<script lang="ts" setup>
import Card from "@/components/Card.vue";
import Toggle from "@/components/Toggle.vue";
import CopyField from "@/components/CopyField.vue";
import {SectionHeaderButton, SectionItem} from "@/types";
import Button from "@/components/Button/Button.vue";
import SkeletonLoader from "@/components/Loaders/SkeletonLoader.vue";
import Notice from "@/components/Notice.vue";
import { translate } from "@/utils/helpers";

type Props = {
  title: string;
  isLoading?: boolean;
  sectionItems: SectionItem[];
  headerButtons?: SectionHeaderButton[];
  warning?: string
};

type Emits = {
  "save-section": [value: boolean, item: SectionItem];
};

const props = defineProps<Props>();
const emit = defineEmits<Emits>();
</script>

<template>
  <div class="home-section">
    <Card v-if="isLoading">
      <SkeletonLoader class="h-mb-24" width="50%" :height="24" rounded />
      <SkeletonLoader
        v-for="(item, index) in sectionItems"
        :class="{ 'h-mb-24': index !== sectionItems.length - 1 }"
        width="100%"
        :height="item.copyLink ? 48 : 24"
        rounded
      />
    </Card>
    <Card v-else>
      <template #header>
        <div class="w-100">
          <div class="d-flex align-items-center justify-content-between w-100">
            <h2 class="h-m-0">{{ props.title }}</h2>
            <div
                v-if="headerButtons?.length > 0"
                class="d-flex align-items-center"
            >
              <Button
                  size="small"
                  v-for="button in headerButtons"
                  :key="button.id"
                  :to="button.to"
                  :variant="button.variant"
                  :target="button.to ? '_blank' : undefined"
                  :icon-append="button.to ? 'icon-launch' : undefined"
              >{{ button.text }}</Button>
            </div>
          </div>
          <Notice :text="warning" v-if="warning" />
        </div>
      </template>
      <div
        class="home-section__section-item"
        v-for="item in sectionItems"
        :key="item.title"
      >
        <div class="d-flex flex-direction-column">
          <div class="d-flex align-items-center justify-content-between w-100">
            <div class="d-flex flex-column">
              <h3 class="h-m-0">{{ item.title }}</h3>
              <p class="h-m-0 text-body-2">
                {{ item.description }}
                <template v-if="item.learn_more_link">
                  <a :href="item.learn_more_link" target="_blank" rel="noopener" class="text-link-2 additional-link">
					  {{ translate('hostinger_tools_llms_txt_learn_more') }}
                  </a>
                </template>

              </p>
            </div>
            <Button
              @click="item.sideButton?.onClick"
              v-if="item.sideButton?.text"
              variant="text"
              >{{ item.sideButton?.text }}</Button
            >

            <Toggle
              v-else-if="item.toggleValue !== undefined"
              class="h-pl-16"
              :model-value="Boolean(item.toggleValue)"
              :bind="false"
              @click="emit('save-section', Boolean(!item.toggleValue), item)"
            />
          </div>
        </div>
        <CopyField class="h-mt-16" v-if="item.copyLink" :link="item.copyLink" />
      </div>
    </Card>
  </div>
</template>

<style lang="scss">
.home-section {
  &__section-item {
    margin-top: 16px;
    flex-direction: column;
    display: flex;
    padding-bottom: 16px;
    border-bottom: 1px solid var(--gray-border);

    &:last-child {
      margin-bottom: 0;
      border-bottom: none;
      padding-bottom: 0;
    }

	.additional-link {
		text-decoration: none!important;
	}
  }
}
</style>
