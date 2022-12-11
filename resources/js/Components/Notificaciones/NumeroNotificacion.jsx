import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEdit, faTrashCan} from '@fortawesome/free-solid-svg-icons';
import Swal from 'sweetalert2'
import { Link } from '@inertiajs/inertia-react';
import dayjs from 'dayjs'
import { Inertia } from '@inertiajs/inertia';


const NumeroNotificacion = ({countNoti}) => {
  
    return (
      <div>
        {countNoti.filas}
      </div>
  )
}

export default NumeroNotificacion