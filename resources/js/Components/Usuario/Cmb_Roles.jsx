import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEdit, faTrashCan} from '@fortawesome/free-solid-svg-icons';
import Swal from 'sweetalert2'
import { Link } from '@inertiajs/inertia-react';
import { Inertia } from '@inertiajs/inertia';

const Cmb_Roles = ({roles}) => {
   
    return (
        <select>
            <option value={roles.ID_Rol}>{roles.Nombre_Rol}</option>
        </select>
      
  )
}

export default Cmb_Roles