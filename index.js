import * as THREE from './three.js-master/build/three.module.js'
import {GLTFLoader} from './three.js-master/examples/jsm/loaders/GLTFLoader.js'

const canvas = document.querySelector('.webgl')
const scene = new THREE.Scene()
scene.background = new THREE.Color(0xdddddd)
const loader = new GLTFLoader()

loader.load('assets/scene.glb', function(glb){
    console.log(glb)
    const root = glb.scene;
    root.scale.set(canvas.width/3000,canvas.width/3000,canvas.width/3000)
    scene.add(root)
}, function(xhr){
    console.log((xhr.loaded/xhr.total * 100) + "% loaded")
}, function(error){
    console.log('An error occured')
})
const ambientLight = new THREE.AmbientLight (0x404040,10);
const directionalLight = new THREE.DirectionalLight(0xffffff,10);
directionalLight.position.set(0,1,0);
directionalLight.castShadow = true;
scene.add(ambientLight)
scene.add(directionalLight)

const sizes ={
    width: window.innerWidth,
    height: window.innerHeight
}

const camera = new THREE.PerspectiveCamera(75, sizes.width/sizes.height, 0.1, 100)
camera.position.x = 0;
camera.position.y = 0;
camera.position.z = 15;
scene.add(camera)

const renderer = new THREE.WebGL1Renderer({
    canvas: canvas
})
renderer.setSize(sizes.width, sizes.height)
renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2))
renderer.shadowMap.enabled = true
renderer.gammOutput = true

function animate(){
    requestAnimationFrame(animate)
    renderer.render(scene,camera)
}
animate()