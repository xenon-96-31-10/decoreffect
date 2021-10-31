<template>
    <div class="container">
      <div class="d-flex justify-content-between align-items-center my-3">
        <h1 class="display-5 fw-bold lh-1">Проекты</h1>
        <button class="btn btn-primary btn-lg text-white" type="button" data-bs-toggle="collapse" data-bs-target="#projectFilters" aria-expanded="false" aria-controls="projectFilters"><i class="bi bi-funnel-fill"></i></button>

      </div>
      <div class="row my-3">
        <div class="col">
          <div class="collapse multi-collapse" id="projectFilters">
            <div class="card card-body">
              <div class="d-grid gap-2 d-md-block text-end">
                <button v-for="tag in tags" class="btn btn-primary text-white my-2 mx-2" @click="filter = tag.name" type="button">{{tag.name}}</button>
                <button class="btn btn-success text-white my-2 mx-2" @click="filter=''" type="button">Все</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="masonry">

        <div v-for="project in filterProjects" :key="project.id" class="col">
          <div class="card shadow-sm">
            <img :src="project.src" class="bd-placeholder-img card-img-top" :alt="project.title"  width="100%">
            <div class="card-body">
              <h5 class="card-title">{{project.title}}</h5>
              <p class="card-text">{{project.description}}</p>
              <p class="card-text">{{project.tag}}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Подробнее</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Заказать</button>
                </div>
                <small class="text-muted">9 мин</small>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="d-grid gap-2 col-sm-4 mx-auto my-3">
        <button class="btn btn-primary btn-lg text-white" type="button" @click="pageChangeHandler">
          <span v-if="page != pageCount">Показать еще</span>
          <span v-else>На этом пока все</span>
        </button>
      </div>

    </div>
</template>

<script>
    import paginationMixin from '../../mixins/pagination.mixin.js'
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        mixins: [paginationMixin],
        created(){
          console.log('kek')
          this.loadProjects()
        },
        data() {
            return {
              projects: [],
              tags: [
                {name: 'В работе'},
                {name: 'Штукатурка'},
                {name: 'Дизайн'},
              ],
              filter: ''
            }
        },
        methods: {
          loadProjects(){
            for (var i = 1; i <= 10; i++) {
              if(!(i % 2)){
                var tag = 'В работе'
              }else{
                var tag = 'Штукатурка, Дизайн'
              }
               this.projects.push({
                 id: i,
                 title: 'Проект '+i,
                 description: 'Текстура -  расположение частей твёрдого вещества, преимущественная ориентация элементов, составляющих материал.',
                 src: 'storage/images/project/'+i+'.jpg',
                 tag: tag
               })
               // ещё какие-то выражения
            }
            this.setupPagination(this.projects)
          }
        },
        computed: {
          filterProjects() {
            let x
            x = this.items.filter(item => item.tag.toLowerCase().indexOf(this.filter.toLowerCase()) !== -1)
            this.initGrid()
            return x
          },
        },
    }
</script>
<style scoped>
.slide-fade-enter-active {
  transition-group: all 0.5s ease;
}

.slide-fade-leave-active {
  transition-group: all .3s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-fade-enter {
  transform: translateX(10px);
  opacity: 0;
}
</style>
