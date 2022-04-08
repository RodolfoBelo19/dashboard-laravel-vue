<template>
  <div class="lists">
    <h6>{{ description }} <span class="badge badge-info"> {{ data.length }} </span> </h6>

    <div class="content">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th v-for="col in column" :key="col[0]" scoped="col">{{ col }}</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in data" :key="user.id">
                    <td>{{ user.name }}</td>
                    <td>{{ user.username }}</td>
                </tr>
            </tbody>
        </table>
    </div>
  </div>
</template>

<script>
export default {
    name: 'Lists',

    props: ['data', 'description', 'column'],
}
</script>

<style scoped>

.lists {
    padding-top: 20px;
    width: 100%;
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 3px;
    background: #fff;
    margin: 0 auto;
}

</style>