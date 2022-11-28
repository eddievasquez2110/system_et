import React from 'react'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'
import InputError from '@/Components/InputError'
import PrimaryButton from '@/Components/PrimaryButton'
import {useForm, Head} from '@inertiajs/inertia-react'

function HomeUser({equipos}) {
  console.log(equipos)
  const Equipos = equipos
  return (
    <div>
      HomeUser
      <div>
        {
          Equipos.map((equipo, index) => (
            <div key={index}>
              {equipo.Nombre_Tipo_Equipo}
            </div>
          ))
        }
      </div>
    
    </div>
    
  )
}

export default HomeUser