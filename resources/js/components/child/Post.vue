<template>
<article>
    <h3>{{ team.name }}</h3>
    <p>{{ team.address }}</p>
</article>
</template>
<script>
export default {
    props: ["team"]
}
</script>